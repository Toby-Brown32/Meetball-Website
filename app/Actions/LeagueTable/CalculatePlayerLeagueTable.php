<?php

namespace App\Actions\LeagueTable;

use Illuminate\Support\Facades\DB;

class CalculatePlayerLeagueTable
{
    /**
     * Builds a simple per-player league table for a season (played, wins, draws, points).
     */
    public function __invoke($season)
    {
        // Get all players who have at least one played appearance in the season.
        $playersQuery = DB::table('players')
            ->join('match_player', function ($join) use ($season) {
                $join->on('players.id', '=', 'match_player.player_id')
                    ->where('match_player.played', '=', 1);
                if ($season !== 'all') {
                    $join->where('match_player.season_id', '=', $season);
                }
            })
            ->select('players.id', 'players.forename', 'players.surname')
            ->distinct();
        $players = $playersQuery->get();

        $playerStats = [];
        foreach ($players as $player) {
            // Keep everything keyed by player_id for fast lookups while we iterate matches.
            $playerStats[$player->id] = [
                'player_id' => $player->id,
                'player' => $player->forename . ' ' . $player->surname,
                'played' => 0,
                'wins' => 0,
                'points' => 0,
            ];
        }

        $matchesQuery = DB::table('matches');
        if ($season !== 'all') {
            $matchesQuery->where('season_id', $season);
        }
        $matches = $matchesQuery->get();

        $matchIds = $matches->pluck('id')->all();

        // Map team names to their goals column on the matches table.
        $teamColumns = [
            'Les Bleus' => 'bleu_goals',
            'Salmons' => 'salmon_goals',
            'Lemons' => 'lemon_goals',
            'Greens' => 'green_goals',
        ];

        // Precompute match outcomes from recorded scores
        $teamsWithScoreByMatch = [];
        $winningTeamsByMatch = [];
        $isDrawByMatch = [];
        foreach ($matches as $match) {
            $scores = [];
            foreach ($teamColumns as $teamName => $col) {
                if (isset($match->$col)) {
                    $scores[$teamName] = $match->$col;
                    $teamsWithScoreByMatch[$match->id][$teamName] = true;
                }
            }

            if (count($scores) < 2) {
                continue;
            }

            $maxScore = max($scores);
            $winningTeams = array_keys($scores, $maxScore, true);
            $winningTeamsByMatch[$match->id] = array_fill_keys($winningTeams, true);
            $isDrawByMatch[$match->id] = count($winningTeams) > 1;
        }

        // Pull all played appearances up-front
        $matchPlayers = DB::table('match_player')
            ->whereIn('match_id', $matchIds)
            ->when($season !== 'all', fn ($q) => $q->where('season_id', $season))
            ->where('played', 1)
            ->select('match_id', 'player_id', 'team')
            ->get();

        foreach ($matchPlayers as $mp) {
            if (!isset($playerStats[$mp->player_id])) {
                continue;
            }

            // Only count appearances for matches/teams that have a recorded score.
            if (isset($teamsWithScoreByMatch[$mp->match_id][$mp->team])) {
                $playerStats[$mp->player_id]['played']++;
            }

            if (!isset($winningTeamsByMatch[$mp->match_id][$mp->team])) {
                continue;
            }

            if ($isDrawByMatch[$mp->match_id] ?? false) {
                // draws is created lazily because not every player will have one.
                $playerStats[$mp->player_id]['draws'] = ($playerStats[$mp->player_id]['draws'] ?? 0) + 1;
            } else {
                $playerStats[$mp->player_id]['wins']++;
            }
        }

        // Points: 3 per win, 1 per draw.
        foreach ($playerStats as &$row) {
            $row['points'] = $row['wins'] * 3 + ($row['draws'] ?? 0);
        }
        unset($row);

        $table = array_values($playerStats);
        // Sort by points, then wins, then appearances.
        usort($table, function ($a, $b) {
            if ($a['points'] !== $b['points']) {
                return $b['points'] <=> $a['points'];
            }
            if ($a['wins'] !== $b['wins']) {
                return $b['wins'] <=> $a['wins'];
            }
            return $b['played'] <=> $a['played'];
        });
        return $table;
    }
}
