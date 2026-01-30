<?php

namespace App\Actions\Player;

use Illuminate\Support\Facades\DB;

class CalculatePlayerMatchStats
{
    /**
     * Returns the played match_player rows for a player, plus the related matches.
     */
    public function __invoke($player, $seasonId = 'all')
    {
        // Fetch this player's played appearances (optionally scoped to a season).
        $matchPlayerQuery = DB::table('match_player')
            ->where('player_id', $player->id)
            ->where('played', 1);
        if ($seasonId !== 'all') {
            $matchPlayerQuery->where('season_id', $seasonId);
        }
        $matchPlayers = $matchPlayerQuery->get();
        $matchIds = $matchPlayers->pluck('match_id')->all();

        // Load the corresponding matches and key by id for fast lookups.
        $matches = DB::table('matches')
            ->whereIn('id', $matchIds);
        if ($seasonId !== 'all') {
            $matches->where('season_id', $seasonId);
        }
        $matches = $matches->get()->keyBy('id');
        return [$matchPlayers, $matches];
    }
}
