<?php

namespace App\Actions\Player;

use Illuminate\Support\Facades\DB;

class GetRadarMaxStats
{
    /**
     * Return max values used to normalize the player comparison radar chart.
     *
     * Keys returned:
     * - player_goals
     * - player_assists
     * - points_per_game
     * - player_of_match
     * - matches_played
     */
    public function __invoke($seasonId = 'all'): array
    {
        $base = DB::table('match_player as mp')->where('mp.played', 1);
        if ($seasonId !== 'all') {
            $base->where('mp.season_id', $seasonId);
        }

        $maxGoals = (clone $base)
            ->selectRaw('SUM(mp.goals) as total')
            ->groupBy('mp.player_id')
            ->orderByDesc('total')
            ->limit(1)
            ->value('total');

        $maxAssists = (clone $base)
            ->selectRaw('SUM(mp.assists) as total')
            ->groupBy('mp.player_id')
            ->orderByDesc('total')
            ->limit(1)
            ->value('total');

        $maxMatchesPlayed = (clone $base)
            ->selectRaw('COUNT(*) as total')
            ->groupBy('mp.player_id')
            ->orderByDesc('total')
            ->limit(1)
            ->value('total');

        $maxPotm = (clone $base)
            ->selectRaw('SUM(mp.player_of_match) as total')
            ->groupBy('mp.player_id')
            ->orderByDesc('total')
            ->limit(1)
            ->value('total');

        // Points per game: compute result per match using team goals vs opponent goals.
        $teamScoreExpr = "CASE
            WHEN mp.team = 'Salmons' THEN COALESCE(m.salmon_goals, 0)
            WHEN mp.team = 'Les Bleus' THEN COALESCE(m.bleu_goals, 0)
            WHEN mp.team = 'Lemons' THEN COALESCE(m.lemon_goals, 0)
            WHEN mp.team = 'Greens' THEN COALESCE(m.green_goals, 0)
            ELSE 0
        END";

        $totalGoalsExpr = "COALESCE(m.salmon_goals, 0)
            + COALESCE(m.bleu_goals, 0)
            + COALESCE(m.lemon_goals, 0)
            + COALESCE(m.green_goals, 0)";

        // opponentScore = totalGoals - teamScore
        $pointsExpr = "CASE
            WHEN ($teamScoreExpr) > (($totalGoalsExpr) - ($teamScoreExpr)) THEN 3
            WHEN ($teamScoreExpr) = (($totalGoalsExpr) - ($teamScoreExpr)) THEN 1
            ELSE 0
        END";

        // Use CAST to avoid integer division issues (esp. SQLite).
        $maxPointsPerGame = DB::table('match_player as mp')
            ->join('matches as m', 'mp.match_id', '=', 'm.id')
            ->where('mp.played', 1)
            ->when($seasonId !== 'all', fn ($q) => $q->where('mp.season_id', $seasonId))
            ->selectRaw('mp.player_id')
            ->selectRaw("CAST(SUM($pointsExpr) AS FLOAT) / NULLIF(COUNT(*), 0) as ppg")
            ->groupBy('mp.player_id')
            ->orderByDesc('ppg')
            ->limit(1)
            ->value('ppg');

        $maxStats = [
            'player_goals' => (float) ($maxGoals ?? 0),
            'player_assists' => (float) ($maxAssists ?? 0),
            'matches_played' => (float) ($maxMatchesPlayed ?? 0),
            'player_of_match' => (float) ($maxPotm ?? 0),
            'points_per_game' => (float) ($maxPointsPerGame ?? 0),
        ];

        // Keep normalization stable (avoid divide-by-zero).
        foreach ($maxStats as $key => $value) {
            if ($value <= 0) {
                $maxStats[$key] = 1;
            }
        }

        return $maxStats;
    }
}
