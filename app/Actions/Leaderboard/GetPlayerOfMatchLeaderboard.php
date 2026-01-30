<?php

namespace App\Actions\Leaderboard;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class GetPlayerOfMatchLeaderboard
{
    /**
     * Returns players ordered by Player of the Match count.
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        $query = DB::table('players')
            ->select(
                'players.id',
                'players.forename',
                'players.surname',
                // Sum of the mp.player_of_match flag across played appearances.
                DB::raw('SUM(mp.player_of_match) as player_of_match')
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
            // Highest count first; then alphabetical for stable ordering.
            ->orderByDesc('player_of_match')
            ->orderBy('players.surname')
            ->orderBy('players.forename');
        if ($limit) {
            $query->limit($limit);
        }
        return $query->get();
    }
}
