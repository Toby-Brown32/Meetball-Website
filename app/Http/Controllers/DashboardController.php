<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FootballMatch;
use App\Models\Season;

class DashboardController extends Controller
{
    /**
     * Show the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $today = now()->toDateString();

        $season = Season::query()
            ->whereDate('start_date', '<=', $today)
            ->whereDate('end_date', '>=', $today)
            ->orderByDesc('start_date')
            ->first();

        if (!$season) {
            $season = Season::query()->orderByDesc('start_date')->first();
        }

        $currentSeason = $season ? $season->name : 'No season';
        $matchesPlayed = 0;
        $goalsScored = 0;

        if ($season) {
            $matchesPlayed = FootballMatch::query()
                ->where('season_id', $season->id)
                ->count();

            $goalsScored = (int) FootballMatch::query()
                ->where('season_id', $season->id)
                ->selectRaw(
                    'COALESCE(SUM(salmon_goals), 0)
                    + COALESCE(SUM(bleu_goals), 0)
                    + COALESCE(SUM(lemon_goals), 0)
                    + COALESCE(SUM(green_goals), 0) as total_goals'
                )
                ->value('total_goals');
        }

        return view('dashboard')->with([
            'currentSeason' => $currentSeason,
            'matchesPlayed' => $matchesPlayed,
            'goalsScored' => $goalsScored
        ]);
    }

    /**
     * Show the matches index page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function matches(Request $request)
    {
        $seasonId = $request->input('season_id');
        $seasons = Season::orderByDesc('start_date')->get();

        $query = FootballMatch::with(['season', 'playerOfTheMatch'])
            ->with(['players' => function ($query) {
                $query->orderBy('team')
                      ->orderBy('played', 'desc')
                      ->orderBy('reserve');
            }]);

        if ($seasonId && $seasonId !== 'all') {
            $query->where('season_id', $seasonId);
        }

        $matches = $query->orderByDesc('match_date')
                         ->paginate(12);

        return view('matches.index')->with([
            'matches' => $matches,
            'seasons' => $seasons,
            'selectedSeason' => $seasonId ?? 'all'
        ]);
    }

    /**
     * Show a specific match details page.
     *
     * @param \App\Models\FootballMatch $match
     * @return \Illuminate\View\View
     */
    public function showMatch(FootballMatch $match)
    {
        $match->load(['season', 'playerOfTheMatch', 'players' => function ($query) {
            $query->orderBy('team')
                  ->orderBy('played', 'desc')
                  ->orderBy('reserve');
        }]);

        return view('matches.show')->with([
            'match' => $match
        ]);
    }
}
