<?php

namespace App\Http\Controllers;

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
}
