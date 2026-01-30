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
        $guaranteed = collect();
        // Andy Brown (id 34)
        $andy = $players->firstWhere('id', 34);
        if ($andy) {
            $guaranteed->push($andy);
        }

        // Last week's player of the match (most recent match)
        $lastMotm = \App\Models\FootballMatch::orderByDesc('match_date')->whereNotNull('player_of_match_id')->first();
        if ($lastMotm) {
            $motmPlayer = $players->firstWhere('id', $lastMotm->player_of_match_id);
            if ($motmPlayer && !$guaranteed->contains('id', $motmPlayer->id)) {
                $guaranteed->push($motmPlayer);
            }
        }

        // Players with missed_games > 0
        $missed = $players->where('missed_games', '>', 0);
        foreach ($missed as $p) {
            if (!$guaranteed->contains('id', $p->id)) {
                $guaranteed->push($p);
            }
        }

        // First-time players (never played: no match_player record)
        $firstTimerIds = \DB::table('players')
            ->leftJoin('match_player', 'players.id', '=', 'match_player.player_id')
            ->whereNull('match_player.match_id')
            ->pluck('players.id')
            ->all();
        $firstTimers = $players->whereIn('id', $firstTimerIds);
        foreach ($firstTimers as $p) {
            if (!$guaranteed->contains('id', $p->id)) {
                $guaranteed->push($p);
            }
        }

        // Mark guaranteed for display
        $guaranteedIds = $guaranteed->pluck('id')->all();
        $players = $players->map(function ($p) use ($guaranteedIds) {
            $p->guaranteed = in_array($p->id, $guaranteedIds);
            return $p;
        });

        // Fill up to 16 with random others
        $nonGuaranteed = $players->filter(fn($p) => !$p->guaranteed)->shuffle()->values();
        $drawn = $guaranteed->values();
        foreach ($nonGuaranteed as $p) {
            if ($drawn->count() < 16) {
                $drawn->push($p);
            }
        }

        // Reserves are the rest, shuffled
        $reserves = $players->filter(fn($p) => !$drawn->contains('id', $p->id))->shuffle()->values();

        return collect([
            'drawn' => $drawn,
            'reserves' => $reserves,
            'guaranteed' => $drawn->filter(fn($p) => $p->guaranteed)->values(),
        ]);
    }
}
