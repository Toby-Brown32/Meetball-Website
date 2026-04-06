<?php

namespace App\Actions\Draw;

use Illuminate\Support\Collection;

class GetGuaranteedPlayers
{
    /**
     * @param \Illuminate\Support\Collection $players
     * @return \Illuminate\Support\Collection
     */
    public function __invoke(Collection $players): Collection
    {
        $candidates = [];

        $addCandidate = function ($player, int $weight, string $reason) use (&$candidates) {
            $playerId = $player->id;

            if (!isset($candidates[$playerId])) {
                $candidates[$playerId] = [
                    'player' => $player,
                    'weight' => $weight,
                    'reasons' => [$reason],
                ];
                return;
            }

            if (!in_array($reason, $candidates[$playerId]['reasons'], true)) {
                $candidates[$playerId]['reasons'][] = $reason;
            }

            if ($weight > $candidates[$playerId]['weight']) {
                $candidates[$playerId]['weight'] = $weight;
            }
        };

        // Andy Brown (id 34)
        $andy = $players->firstWhere('id', 34);
        if ($andy) {
            $addCandidate($andy, 1000, 'Andy Brown');
        }

        // Last week's player of the match (most recent match)
        $lastMotm = \App\Models\FootballMatch::orderByDesc('match_date')
            ->whereNotNull('player_of_match_id')
            ->first();
        if ($lastMotm) {
            $motmPlayer = $players->firstWhere('id', $lastMotm->player_of_match_id);
            if ($motmPlayer) {
                $addCandidate($motmPlayer, 900, 'Player of the Match');
            }
        }

        // First-time players (never played: no match_player record)
        $firstTimerIds = \DB::table('players')
            ->leftJoin('match_player', 'players.id', '=', 'match_player.player_id')
            ->whereNull('match_player.match_id')
            ->pluck('players.id')
            ->all();
        $firstTimers = $players->whereIn('id', $firstTimerIds);
        foreach ($firstTimers as $player) {
            $addCandidate($player, 800, 'First timer');
        }

        // Players whose most recent match_player entry was as a reserve.
        $latestMatchPlayers = collect(\DB::table('match_player as mp')
            ->join('matches as m', 'mp.match_id', '=', 'm.id')
            ->select('mp.player_id', 'mp.reserve', 'm.match_date')
            ->orderByDesc('m.match_date')
            ->get())
            ->unique('player_id');

        foreach ($latestMatchPlayers as $row) {
            if ($row->reserve) {
                $player = $players->firstWhere('id', $row->player_id);
                if ($player) {
                    $addCandidate($player, 700, 'Recent reserve');
                }
            }
        }

        // Players with missed_games > 0 are weighted by how many games they missed.
        $missed = $players->where('missed_games', '>', 0);
        foreach ($missed as $player) {
            $addCandidate($player, 100 + $player->missed_games, 'Missed games (' . $player->missed_games . ')');
        }

        $candidateItems = collect($candidates)->map(function ($item) {
            $item['reasons'] = array_values(array_unique($item['reasons']));
            return $item;
        });

        $candidateWeightMap = $candidateItems->mapWithKeys(fn ($item) => [$item['player']->id => $item['weight']])->all();

        $selectedGuaranteed = $candidateItems
            ->sortByDesc(function ($item) {
                // Primary: sort by weight (descending)
                // Secondary: sort by missed_games (descending) as tiebreaker
                return [$item['weight'], $item['player']->missed_games];
            })
            ->map(function ($item) {
                $player = $item['player'];
                $player->guaranteed_reasons = $item['reasons'];
                $player->guaranteed_reason = implode(', ', $item['reasons']);
                return $player;
            })
            ->values()
            ->take(16);

        $guaranteedIds = $selectedGuaranteed->pluck('id')->all();
        $players = $players->map(function ($player) use ($guaranteedIds) {
            $player->guaranteed = in_array($player->id, $guaranteedIds, true);
            if (!isset($player->guaranteed_reasons)) {
                $player->guaranteed_reasons = [];
                $player->guaranteed_reason = null;
            }
            return $player;
        });

        $nonGuaranteed = $players->filter(fn ($player) => !$player->guaranteed)->shuffle()->values();
        $drawn = $selectedGuaranteed->concat($nonGuaranteed->take(max(0, 16 - $selectedGuaranteed->count())))->values();

        $allReserves = $players->filter(fn ($player) => !$drawn->contains('id', $player->id));

        $reserves = $allReserves
            ->groupBy(fn ($player) => $candidateWeightMap[$player->id] ?? -1)
            ->sortByDesc(fn ($group, $weight) => $weight)
            ->flatMap(fn ($group) => $group->shuffle())
            ->map(function ($player) {
                $player->is_reserve_overflow = !empty($player->guaranteed_reasons) && count($player->guaranteed_reasons) > 0;
                return $player;
            })
            ->values();

        return collect([
            'drawn' => $drawn,
            'reserves' => $reserves,
            'guaranteed' => $drawn->filter(fn ($player) => $player->guaranteed)->values(),
        ]);
    }
}
