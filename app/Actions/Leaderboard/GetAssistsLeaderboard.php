<?php

namespace App\Actions\Leaderboard;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class GetAssistsLeaderboard
{
    /**
     * Returns players ordered by total assists (optionally filtered by season).
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        $query = DB::table('players')
            // Sum assists across played appearances.
            ->select('players.id', 'players.forename', 'players.surname', DB::raw('SUM(mp.assists) as assists'))
            ->join('match_player as mp', function ($join) use ($seasonId) {
                $join->on('players.id', '=', 'mp.player_id');
                $join->where('mp.played', '=', 1);
                // If a season is selected, only count match_player rows for that season.
                if ($seasonId !== 'all') {
                    $join->where('mp.season_id', '=', $seasonId);
                }
            })
            ->groupBy('players.id', 'players.forename', 'players.surname')
            // Highest assists first; then alphabetical for stable ordering.
            ->orderByDesc('assists')
            ->orderBy('players.surname')
            ->orderBy('players.forename');
        if ($limit) {
            $query->limit($limit);
        }
        return $query->get();
    }
}
