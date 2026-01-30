<?php

namespace App\Actions\Leaderboard;

use Illuminate\Support\Facades\DB;

class GetGoalDifferenceLeaderboard
{
    /**
     * Returns players ordered by team goal difference (GF-GA) for matches they played.
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        // Goals scored by the player's team in that match (depends on which team they were on).
        $teamGoalsForExpr = "CASE
            WHEN mp.team = 'Salmons' THEN COALESCE(m.salmon_goals, 0)
            WHEN mp.team = 'Les Bleus' THEN COALESCE(m.bleu_goals, 0)
            WHEN mp.team = 'Lemons' THEN COALESCE(m.lemon_goals, 0)
            WHEN mp.team = 'Greens' THEN COALESCE(m.green_goals, 0)
            ELSE 0
        END";

        // Total goals in the match (used to derive goals conceded = total - goals for).
        $totalGoalsExpr = "COALESCE(m.salmon_goals, 0)
            + COALESCE(m.bleu_goals, 0)
            + COALESCE(m.lemon_goals, 0)
            + COALESCE(m.green_goals, 0)";

        $query = DB::table('players')
            ->select(
                'players.id',
                'players.forename',
                'players.surname',
                DB::raw("SUM($teamGoalsForExpr) as team_goals_for"),
                DB::raw("SUM(($totalGoalsExpr) - ($teamGoalsForExpr)) as team_goals_against"),
                DB::raw("(SUM($teamGoalsForExpr) - SUM(($totalGoalsExpr) - ($teamGoalsForExpr))) as goal_difference")
            )
            ->join('match_player as mp', function ($join) use ($seasonId) {
                $join->on('players.id', '=', 'mp.player_id');
                $join->where('mp.played', '=', 1);
                if ($seasonId !== 'all') {
                    $join->where('mp.season_id', '=', $seasonId);
                }
            })
            ->join('matches as m', 'mp.match_id', '=', 'm.id')
            ->groupBy('players.id', 'players.forename', 'players.surname')
            // Highest GD first; then alphabetical for stable ordering.
            ->orderByDesc('goal_difference')
            ->orderBy('players.surname')
            ->orderBy('players.forename');

        if ($limit) {
            $query->limit($limit);
        }

        return $query->get();
    }
}
