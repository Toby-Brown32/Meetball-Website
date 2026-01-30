<?php

namespace App\Actions\Leaderboard;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class GetMatchesPlayedLeaderboard
{
    /**
     * Returns players ordered by matches played, with a played_pct field.
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        // Total matches used to calculate played_pct.
        $totalMatchesQuery = DB::table('matches');
        if ($seasonId !== 'all') {
            $totalMatchesQuery->where('season_id', $seasonId);
        }
        $totalMatches = $totalMatchesQuery->count();

        $query = DB::table('players')
            // Count played appearances (mp.played is filtered to 1 below).
            ->select('players.id', 'players.forename', 'players.surname', DB::raw('SUM(mp.played) as played'))
            ->join('match_player as mp', function ($join) use ($seasonId) {
                $join->on('players.id', '=', 'mp.player_id');
                $join->where('mp.played', '=', 1);
                // If a season is selected, only count match_player rows for that season.
                if ($seasonId !== 'all') {
                    $join->where('mp.season_id', '=', $seasonId);
                }
            })
            ->groupBy('players.id', 'players.forename', 'players.surname')
            // Most appearances first; then alphabetical for stable ordering.
            ->orderByDesc('played')
            ->orderBy('players.surname')
            ->orderBy('players.forename');
        if ($limit) {
            $query->limit($limit);
        }
        $players = $query->get();

        // Add played_pct to each row.
        foreach ($players as $player) {
            $player->played = (int) $player->played;
            $player->played_pct = $totalMatches ? round(100 * $player->played / $totalMatches, 1) : 0;
        }
        return $players;
    }
}
