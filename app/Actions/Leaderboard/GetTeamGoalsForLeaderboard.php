<?php

namespace App\Actions\Leaderboard;

use App\Models\Player;
use Illuminate\Support\Facades\DB;

class GetTeamGoalsForLeaderboard
{
    /**
     * Returns players ordered by total goals scored by their team in matches they played.
     */
    public function __invoke($seasonId = 'all', $limit = null)
    {
        $query = DB::table('players')
            // Sum the goals for the team the player was on in each match.
            ->select('players.id', 'players.forename', 'players.surname', DB::raw('SUM(CASE 
                WHEN mp.team = "Salmons" THEN m.salmon_goals
                WHEN mp.team = "Les Bleus" THEN m.bleu_goals
                WHEN mp.team = "Lemons" THEN m.lemon_goals
                WHEN mp.team = "Greens" THEN m.green_goals
                ELSE 0 END) as team_goals_for'))
            ->join('match_player as mp', function ($join) use ($seasonId) {
                $join->on('players.id', '=', 'mp.player_id');
                $join->where('mp.played', '=', 1);
                // If a season is selected, only count match_player rows for that season.
                if ($seasonId !== 'all') {
                    $join->where('mp.season_id', '=', $seasonId);
                }
            })
            ->leftJoin('matches as m', function ($join) {
                $join->on('mp.match_id', '=', 'm.id');
            })
            ->groupBy('players.id', 'players.forename', 'players.surname')
            // Highest total first; then alphabetical for stable ordering.
            ->orderByDesc('team_goals_for')
            ->orderBy('players.surname')
            ->orderBy('players.forename');
        if ($limit) {
            $query->limit($limit);
        }
        return $query->get();
    }
}
