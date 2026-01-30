<?php

namespace App\Actions\LeagueTable;

use Illuminate\Support\Facades\DB;

class CalculateTeamLeagueTable
{
    /**
     * Builds a simple team league table for a season (W/D/L, GF/GA/GD, points).
     */
    public function __invoke($season)
    {
        // Map match score columns to display team names.
        $teamColumns = [
            'bleu_goals' => 'Les Bleus',
            'salmon_goals' => 'Salmons',
            'lemon_goals' => 'Lemons',
            'green_goals' => 'Greens',
        ];

        $stats = [];
        $matchesQuery = DB::table('matches');
        if ($season !== 'all') {
            $matchesQuery->where('season_id', $season);
        }
        $matches = $matchesQuery->get();

        foreach ($matches as $match) {
            // Collect the teams that actually have a recorded score for this match.
            $teamsInMatch = [];
            foreach ($teamColumns as $col => $team) {
                if (isset($match->$col)) {
                    $teamsInMatch[] = [
                        'col' => $col,
                        'team' => $team,
                        'goals' => $match->$col,
                    ];
                }
            }

            // Only count each unique pair once (A vs B, not also B vs A).
            $numTeams = count($teamsInMatch);
            for ($i = 0; $i < $numTeams; $i++) {
                for ($j = $i + 1; $j < $numTeams; $j++) {
                    $teamA = $teamsInMatch[$i]['team'];
                    $goalsA = $teamsInMatch[$i]['goals'];
                    $teamB = $teamsInMatch[$j]['team'];
                    $goalsB = $teamsInMatch[$j]['goals'];

                    // Update both teams' rows from this head-to-head.
                    // Team A
                    if (!isset($stats[$teamA])) {
                        $stats[$teamA] = [
                            'team' => $teamA,
                            'played' => 0,
                            'won' => 0,
                            'drawn' => 0,
                            'lost' => 0,
                            'gf' => 0,
                            'ga' => 0,
                            'gd' => 0,
                            'points' => 0,
                        ];
                    }
                    $stats[$teamA]['played']++;
                    $stats[$teamA]['gf'] += $goalsA;
                    $stats[$teamA]['ga'] += $goalsB;
                    if ($goalsA > $goalsB) {
                        $stats[$teamA]['won']++;
                    } elseif ($goalsA < $goalsB) {
                        $stats[$teamA]['lost']++;
                    } else {
                        $stats[$teamA]['drawn']++;
                    }
                    // Team B
                    if (!isset($stats[$teamB])) {
                        $stats[$teamB] = [
                            'team' => $teamB,
                            'played' => 0,
                            'won' => 0,
                            'drawn' => 0,
                            'lost' => 0,
                            'gf' => 0,
                            'ga' => 0,
                            'gd' => 0,
                            'points' => 0,
                        ];
                    }
                    $stats[$teamB]['played']++;
                    $stats[$teamB]['gf'] += $goalsB;
                    $stats[$teamB]['ga'] += $goalsA;
                    if ($goalsB > $goalsA) {
                        $stats[$teamB]['won']++;
                    } elseif ($goalsB < $goalsA) {
                        $stats[$teamB]['lost']++;
                    } else {
                        $stats[$teamB]['drawn']++;
                    }
                }
            }
        }

        // Final derived values.
        foreach ($stats as $team => $row) {
            $row['gd'] = $row['gf'] - $row['ga'];
            $row['points'] = $row['won'] * 3 + $row['drawn'];
            $stats[$team] = $row;
        }

        $table = array_values($stats);

        // Sort by points, then goal difference, then goals for.
        usort($table, function ($a, $b) {
            if ($a['points'] !== $b['points']) {
                return $b['points'] <=> $a['points'];
            }
            if ($a['gd'] !== $b['gd']) {
                return $b['gd'] <=> $a['gd'];
            }
            return $b['gf'] <=> $a['gf'];
        });
        return $table;
    }
}
