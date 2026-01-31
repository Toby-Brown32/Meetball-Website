<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Season;
use App\Actions\Player\GetPlayerStats;
use App\Actions\Player\GetRadarMaxStats;

class PlayerController extends Controller
{
    /**
     * Show the list of players.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $players = Player::orderBy('forename')->orderBy('surname')->get();
        return view('public.players_index', compact('players'));
    }

    /**
     * Show the player's statistics page.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $seasonId = $request->input('season_id', 'all');
        $seasons = Season::orderByDesc('start_date')->get();
        $allPlayers = Player::orderBy('forename')->orderBy('surname')->get();
        $getStats = new GetPlayerStats();
        $stats = $getStats($player, $seasonId);
        $statList = [
            ['label' => 'Matches Played', 'value' => $stats['matches_played']],
            ['label' => 'Played %', 'value' => $stats['played_pct'] . '%'],
            ['label' => 'Player Goals', 'value' => $stats['player_goals']],
            ['label' => 'Player Assists', 'value' => $stats['player_assists']],
            ['label' => 'Wins', 'value' => $stats['wins']],
            ['label' => 'Draws', 'value' => $stats['draws']],
            ['label' => 'Losses', 'value' => $stats['losses']],
            ['label' => 'Points', 'value' => $stats['points']],
            ['label' => 'Points per Game', 'value' => $stats['points_per_game']],
            ['label' => 'Team Goals For', 'value' => $stats['team_goals_for']],
            ['label' => 'Team Goals Against', 'value' => $stats['team_goals_against']],
            ['label' => 'Goal Difference', 'value' => $stats['team_goal_difference']],
            ['label' => 'Goals/Game %', 'value' => $stats['goals_to_game_pct'] . '%'],
            ['label' => 'Assists/Game %', 'value' => $stats['assists_to_game_pct'] . '%'],
            ['label' => 'Clean Sheets', 'value' => $stats['clean_sheets']],
            ['label' => 'Player Hattricks', 'value' => $stats['hattricks']],
            ['label' => 'Player Braces', 'value' => $stats['braces']],
            ['label' => 'PotM', 'value' => $stats['player_of_match']],
            ['label' => 'Matches Missed', 'value' => $stats['matches_missed']],
        ];

        // Only use 6 relevant stats for radar chart, normalized to percentage of max for each stat
        $radarLabels = ['Goals', 'Assists', 'Points/Match','PotM', 'Appearances'];
        $radarKeys = ['player_goals', 'player_assists', 'points_per_game', 'player_of_match', 'matches_played'];
        $maxStats = (new GetRadarMaxStats())($seasonId);
        $radarStats = [];
        foreach ($radarLabels as $i => $label) {
            $key = $radarKeys[$i];
            $value = isset($stats[$key]) ? $stats[$key] : 0;
            $max = $maxStats[$key] ?: 1;

            $normalized = round(($value / $max) * 100, 2);
            $normalized = max(0, min(100, $normalized));

            $radarStats[] = [
                'label' => $label,
                'value' => $normalized, // normalized for chart
                'raw' => $value // raw stat for tooltip
            ];
        }

        $comparePlayerId = $request->input('comparePlayer');
        $comparePlayer = null;
        $compareStatList = null;
        if ($comparePlayerId) {
            $comparePlayer = Player::find($comparePlayerId);
            if ($comparePlayer) {
                $compareStats = $getStats($comparePlayer, $seasonId);
                $compareStatList = [];
                foreach ($radarLabels as $i => $label) {
                    $key = $radarKeys[$i];
                    $value = isset($compareStats[$key]) ? $compareStats[$key] : 0;
                    $max = $maxStats[$key] ?: 1;

                    $normalized = round(($value / $max) * 100, 2);
                    $normalized = max(0, min(100, $normalized));

                    $compareStatList[] = [
                        'label' => $label,
                        'value' => $normalized,
                        'raw' => $value
                    ];
                }
            }
        }
        return view('public.players_show', compact(
            'player',
            'stats',
            'statList',
            'seasons',
            'seasonId',
            'allPlayers',
            'comparePlayer',
            'compareStatList',
            'radarStats'
        ));
    }
}
