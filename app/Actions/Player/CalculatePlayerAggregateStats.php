<?php

namespace App\Actions\Player;

class CalculatePlayerAggregateStats
{
    /**
     * Aggregates season totals/derived stats from a player's match_player rows.
     */
    public function __invoke($matchPlayers, $matches, $player, $seasonId = 'all')
    {
        // Map display team name to the goals column on matches.
        $teamColumns = [
            'Les Bleus' => 'bleu_goals',
            'Salmons' => 'salmon_goals',
            'Lemons' => 'lemon_goals',
            'Greens' => 'green_goals',
        ];
        $stats = [
            'matches_played' => $matchPlayers->count(),
            'team_goals_for' => 0,
            'team_goals_against' => 0,
            'player_goals' => $matchPlayers->sum('goals'),
            'player_assists' => $matchPlayers->sum('assists'),
            'wins' => 0,
            'draws' => 0,
            'losses' => 0,
            'points' => 0,
            'played_pct' => 0,
            'points_per_game' => 0,
            'team_goal_difference' => 0,
            'goals_to_game_pct' => 0,
            'assists_to_game_pct' => 0,
            'pct_team_goals' => 0,
            'pct_team_assists' => 0,
        ];

        // Used to calculate played percentage.
        if ($seasonId !== 'all') {
            $totalMatches = \DB::table('matches')->where('season_id', $seasonId)->count();
        } else {
            $totalMatches = \DB::table('matches')->count();
        }
        $teamGoalsFor = 0;
        $teamGoalsAgainst = 0;
        $wins = 0;
        $draws = 0;
        $losses = 0;
        $teamGoals = 0;
        $teamAssists = 0;
        $teamGoalsTotal = 0;
        $teamAssistsTotal = 0;
        $uniqueMatches = $matchPlayers->unique('match_id');
        foreach ($uniqueMatches as $mp) {
            $matchId = $mp->match_id;
            $match = $matches[$matchId] ?? null;
            if (!$match) {
                continue;
            }
            $teamCol = $teamColumns[$mp->team] ?? null;
            if (!$teamCol) {
                continue;
            }
            $teamGoalsFor += $match->$teamCol ?? 0;
            $opponentCol = null;
            foreach ($teamColumns as $name => $col) {
                if ($name !== $mp->team && isset($match->$col)) {
                    $opponentCol = $col;
                    break;
                }
            }
            $teamGoalsAgainst += $match->$opponentCol ?? 0;
            $teamGoals += $match->$teamCol ?? 0;
            $teamGoalsTotal += $match->$teamCol ?? 0;
            $teamAssistsMatch = $matchPlayers
                ->where('match_id', $mp->match_id)
                ->where('team', $mp->team)
                ->sum('assists');
            $teamAssists += $teamAssistsMatch;

            // Work out win/draw/loss from the match's recorded team scores.
            $scores = [];
            foreach ($teamColumns as $name => $col) {
                if (isset($match->$col)) {
                    $scores[$name] = $match->$col;
                }
            }
            if (count($scores) < 2) {
                continue;
            }
            $maxScore = max($scores);
            $winningTeams = array_keys($scores, $maxScore, true);
            $draw = count($winningTeams) > 1;
            if (in_array($mp->team, $winningTeams)) {
                if ($draw) {
                    $draws++;
                } else {
                    $wins++;
                }
            } else {
                $losses++;
            }
        }
        $stats['team_goals_for'] = $teamGoalsFor;
        $stats['team_goals_against'] = $teamGoalsAgainst;
        $stats['wins'] = $wins;
        $stats['draws'] = $draws;
        $stats['losses'] = $losses;
        $stats['points'] = $wins * 3 + $draws;
        $stats['played_pct'] = $totalMatches
            ? round(100 * $stats['matches_played'] / $totalMatches, 1)
            : 0;
        $stats['points_per_game'] = $stats['matches_played']
            ? round($stats['points'] / $stats['matches_played'], 2)
            : 0;
        $stats['team_goal_difference'] = $teamGoalsFor - $teamGoalsAgainst;
        $stats['goals_to_game_pct'] = $stats['matches_played']
            ? round(100 * $stats['player_goals'] / $stats['matches_played'], 1)
            : 0;
        $stats['assists_to_game_pct'] = $stats['matches_played']
            ? round(100 * $stats['player_assists'] / $stats['matches_played'], 1)
            : 0;
        return $stats;
    }
}
