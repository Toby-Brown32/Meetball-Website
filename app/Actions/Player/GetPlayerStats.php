<?php

namespace App\Actions\Player;

use Illuminate\Support\Facades\DB;

class GetPlayerStats
{
    /**
     * Builds the full stats array for a player (optionally scoped to a season).
     */
    public function __invoke($player, $seasonId = 'all')
    {
        // Load match rows + match records needed for the calculations.
        $getMatchStats = new \App\Actions\Player\CalculatePlayerMatchStats();
        [$matchPlayers, $matches] = $getMatchStats($player, $seasonId);

        $getAggregateStats = new \App\Actions\Player\CalculatePlayerAggregateStats();
        $stats = $getAggregateStats($matchPlayers, $matches, $player, $seasonId);

        $getSpecialStats = new \App\Actions\Player\CalculatePlayerSpecialStats();
        $specialStats = $getSpecialStats($matchPlayers, $matches, $player);

        // Matches missed = reserve appearances.
        $matchesMissedQuery = \DB::table('match_player')
            ->where('player_id', $player->id)
            ->where('reserve', 1);
        if ($seasonId !== 'all') {
            $matchesMissedQuery->where('season_id', $seasonId);
        }
        $matchesMissed = $matchesMissedQuery->count();
        $stats = array_merge($stats, $specialStats, ['matches_missed' => $matchesMissed]);
        return $stats;
    }
}
