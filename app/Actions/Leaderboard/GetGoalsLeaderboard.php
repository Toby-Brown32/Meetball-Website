<?php

namespace App\Actions\Leaderboard;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class GetGoalsLeaderboard
{
    /**
     * Returns players ordered by total goals (optionally filtered by season).
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        $query = DB::table('players')
            // Sum goals across played appearances.
            ->select('players.id', 'players.forename', 'players.surname', DB::raw('SUM(mp.goals) as goals'))
            ->join('match_player as mp', function ($join) use ($seasonId) {
                $join->on('players.id', '=', 'mp.player_id');
                $join->where('mp.played', '=', 1);
                // If a season is selected, only count match_player rows for that season.
                if ($seasonId !== 'all') {
                    $join->where('mp.season_id', '=', $seasonId);
                }
            })
            ->groupBy('players.id', 'players.forename', 'players.surname')
            // Highest goals first; then alphabetical for stable ordering.
            ->orderByDesc('goals')
            ->orderBy('players.surname')
            ->orderBy('players.forename');
        if ($limit) {
            $query->limit($limit);
        }
        return $query->get();
    }
}
