<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Season;
use App\Actions\LeagueTable\CalculatePlayerLeagueTable;
use App\Actions\LeagueTable\CalculateTeamLeagueTable;
use App\Actions\LeagueTable\GetLeagueTableColumns;

class LeagueTableController extends Controller
{
    /**
     * Show the league table page.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $season = $request->input('season_id') ?? Season::orderByDesc('start_date')->first()?->id;
        $seasons = Season::orderByDesc('start_date')->get();
        $type = $request->input('type', 'teams');

        if ($type === 'players') {
            return $this->playersLeagueTable($request, $season, $seasons);
        }

        $calculateTable = new CalculateTeamLeagueTable();
        $table = $calculateTable($season);

        $isPlayers = false;
        $getColumns = new GetLeagueTableColumns();
        $columns = $getColumns($isPlayers);
        return view('public.league_table', compact('table', 'season', 'seasons', 'type', 'columns'));
    }

    /**
     * Show the players league table page.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $season
     * @param \Illuminate\Support\Collection $seasons
     * @return \Illuminate\View\View
     */
    public function playersLeagueTable(Request $request, $season, $seasons)
    {
        $calculateTable = new CalculatePlayerLeagueTable();
        $table = $calculateTable($season);

        $getColumns = new GetLeagueTableColumns();
        $columns = $getColumns(true);
        return view('public.players_league_table', compact('table', 'season', 'seasons', 'columns'));
    }
}
