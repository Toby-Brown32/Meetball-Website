<?php

namespace App\Actions\Leaderboard;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class GetGoalInvolvementsLeaderboard
{
    /**
     * Returns players ordered by goal involvements (goals + assists).
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        $query = DB::table('players')
            ->select(
                'players.id',
                'players.forename',
                'players.surname',
                // Goal involvements = goals + assists across played appearances.
                DB::raw('SUM(mp.goals + mp.assists) as goal_involvements')
            )
            ->join('match_player as mp', function ($join) use ($seasonId) {
                $join->on('players.id', '=', 'mp.player_id');
                $join->where('mp.played', '=', 1);
                // If a season is selected, only count match_player rows for that season.
                if ($seasonId !== 'all') {
                    $join->where('mp.season_id', '=', $seasonId);
                }
            })
            ->groupBy('players.id', 'players.forename', 'players.surname')
            // Highest involvements first; then alphabetical for stable ordering.
            ->orderByDesc('goal_involvements')
            ->orderBy('players.surname')
            ->orderBy('players.forename');
        if ($limit) {
            $query->limit($limit);
        }
        return $query->get();
    }
}
