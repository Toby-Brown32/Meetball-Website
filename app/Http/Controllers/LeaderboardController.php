<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Season;
use App\Actions\Leaderboard\GetLeaderboardColumns;
use App\Actions\Leaderboard\GetLeaderboardStat;

class LeaderboardController extends Controller
{
    /**
     * Show the leaderboard page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $season = $request->input('season_id') ?? Season::orderByDesc('start_date')->first()?->id;
        $seasons = Season::orderByDesc('start_date')->get();
        $seasonItems = collect([['value' => 'all', 'label' => 'All Seasons']])
            ->merge($seasons->map(fn($s) => ['value' => (string) $s->id, 'label' => $s->name]))
            ->values();
        $selectedSeason = $request->input('season_id') ?? $season;
        // Top 5 for each stat
        $stats = [
            'goals' => $this->getTopPlayers('goals', $season, 5),
            'assists' => $this->getTopPlayers('assists', $season, 5),
            'goal_involvements' => $this->getTopPlayers('goal_involvements', $season, 5),
            'matches_played' => $this->getTopPlayers('matches_played', $season, 5),
            'team_goals_for' => $this->getTopPlayers('team_goals_for', $season, 5),
            'goal_difference' => $this->getTopPlayers('goal_difference', $season, 5),

            'player_of_match' => $this->getTopPlayers('player_of_match', $season, 5),

        ];
        return view('public.leaderboard', compact('stats', 'season', 'seasons', 'seasonItems', 'selectedSeason'));
    }

    /**
     * Show the leaderboard for a specific stat.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $stat
     * @return \Illuminate\View\View
     */
    public function stat(Request $request, $stat)
    {
        $season = $request->input('season_id') ?? Season::orderByDesc('start_date')->first()?->id;
        $seasons = Season::orderByDesc('start_date')->get();
        $seasonItems = collect([['value' => 'all', 'label' => 'All Seasons']])
            ->merge($seasons->map(fn($s) => ['value' => (string) $s->id, 'label' => $s->name]))
            ->values();
        $selectedSeason = $request->input('season_id') ?? $season;
        $statOptions = [
            'goals' => 'Goals',
            'assists' => 'Assists',
            'goal_involvements' => 'Goal Involvements',
            'team_goals_for' => 'Team Goals For',
            'matches_played' => 'Matches Played',
            'goal_difference' => 'Goal Difference',
            'player_of_match' => 'Player of the Match',
        ];

        $statItems = collect($statOptions)->map(function ($label, $key) use ($season) {
            return ['value' => $key, 'label' => $label, 'action' => route('leaderboard.stat', $key) . '?season_id=' . ($season ?? '')];
        })->values();
        $players = $this->getTopPlayers($stat, $season, null); // null = all
        $getColumns = new GetLeaderboardColumns();
        $columns = $getColumns($stat);
        return view('public.leaderboard_stat', compact(
            'players',
            'stat',
            'season',
            'seasons',
            'columns',
            'statOptions',
            'seasonItems',
            'selectedSeason',
            'statItems'
        ));
    }

    /**
     * Get top players for a specific statistic.
     *
     * @param string $stat
     * @param int|string $seasonId
     * @param int|null $limit
     * @return \Illuminate\Support\Collection
     */
    private function getTopPlayers($stat, $seasonId, $limit = null)
    {
        $getLeaderboardStat = new GetLeaderboardStat();
        return $getLeaderboardStat($stat, $seasonId, $limit);
    }
}
