<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use App\Http\Requests\Admin\StoreMatchPlayerStatsRequest;
use App\Http\Requests\Admin\StorePlayerRequest;
use App\Http\Requests\Admin\CreateSeasonRequest;
use App\Http\Requests\Admin\StoreMatchRequest;
use App\Actions\Stats\ValidateMatchPlayerStats;
use App\Actions\Draw\GetGuaranteedPlayers;
use App\Actions\Draw\DrawTeams;
use App\Actions\Draw\FormatWeeklyDrawOutput;

/**
 * Controller for admin functionalities.
 */
class AdminController extends Controller
{
    /**
     * Show the weekly draw page and handle team drawing.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function weeklyDraw(Request $request)
    {
        $players = \App\Models\Player::orderBy('surname')->orderBy('forename')->get();
        $teams = null;
        $weeklyDrawOutput = null;
        $selected = $request->input('players', []);
        $redraw = $request->input('redraw', false);

        $mostRecentMatch = FootballMatch::orderByDesc('match_date')->first();
        $nextGameDate = $mostRecentMatch?->match_date
            ? Carbon::parse($mostRecentMatch->match_date)->addDays(7)
            : Carbon::now()->next(Carbon::THURSDAY);

        if ($request->isMethod('post') && count($selected) > 0) {
            $selectedPlayers = $players->whereIn('id', $selected)->values();
            $offset = $redraw ? rand(0, $selectedPlayers->count() - 1) : 0;
            $selectedPlayers = $selectedPlayers->slice($offset)->concat($selectedPlayers->slice(0, $offset))->values();
            $teams = $this->drawBalancedTeams($selectedPlayers);

            $formatWeeklyDrawOutput = new FormatWeeklyDrawOutput();
            $weeklyDrawOutput = $formatWeeklyDrawOutput($teams, $nextGameDate);
        }
        return view('admin.weekly_draw', compact('players', 'teams', 'selected', 'nextGameDate', 'weeklyDrawOutput'));
    }

    /**
     * Draw balanced teams from selected players.
     *
     * @param \Illuminate\Support\Collection $players
     * @return array
     */

    private function drawBalancedTeams($players)
    {
        $getGuaranteed = new GetGuaranteedPlayers();
        $drawTeams = new DrawTeams();

        $result = $getGuaranteed($players);
        $drawn = $result['drawn'];
        $reserves = $result['reserves'];
        $guaranteed = $result['guaranteed'];

        $teams = $drawTeams($drawn);
        $teams['reserves'] = $reserves;
        $teams['guaranteed'] = $guaranteed;
        return $teams;
    }

    /**
     * Show the stats inputter page.
     *
     * @return \Illuminate\View\View
     */
    public function statsInputter()
    {
           $matches = FootballMatch::with('season')->orderBy('match_date', 'desc')->get();
           $players = Player::orderBy('forename')->orderBy('surname')->get();
           return view('admin.stats_inputter', compact('matches', 'players'));
    }

    /**
     * Store match player stats.
     *
     * @param \App\Http\Requests\Admin\StoreMatchPlayerStatsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeMatchPlayerStats(StoreMatchPlayerStatsRequest $request)
    {
        $validated = $request->validated();

        $matchId = $validated['match_id'];
        $players = $validated['players'];
        $selected = $validated['selected'];

        $match = FootballMatch::find($matchId);

        $validateStats = new ValidateMatchPlayerStats();
        [$inputErrors, $valid] = $validateStats($players, $selected);
        if (!$valid) {
            return redirect()->back()->withErrors(new \Illuminate\Support\MessageBag($inputErrors))->withInput();
        }

        foreach ($selected as $playerId) {
                $data = $players[$playerId] ?? [];
                $played = !empty($data['played']);
                $reserve = !empty($data['reserve']);
                \DB::table('match_player')->updateOrInsert(
                    [
                        'match_id' => $matchId,
                        'player_id' => $playerId,
                    ],
                    [
                        'team' => $data['team'] ?? null,
                        'played' => $played,
                        'reserve' => $reserve,
                        'goals' => $data['goals'] ?? 0,
                        'assists' => $data['assists'] ?? 0,
                        'player_of_match' => !empty($data['player_of_match']),
                        'season_id' => $match->season_id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            if ($reserve && !$played) {
                \App\Models\Player::where('id', $playerId)->increment('missed_games');
            }
        }

        return redirect()->back()->with('success', 'Match player stats saved successfully');
    }

    /**
     * Show the add players page.
     *
     * @return \Illuminate\View\View
     */
    public function addPlayers()
    {
        return view('admin.add_players');
    }

    /**
     * Store a new player.
     *
     * @param \App\Http\Requests\Admin\StorePlayerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storePlayer(StorePlayerRequest $request)
    {
        $validated = $request->validated();

        $validated['nickname'] = $validated['nickname'] ?: null;

        Player::create($validated);

        return redirect()->back()->with('success', 'Player added successfully');
    }

    /**
     * Show the new season page.
     *
     * @return \Illuminate\View\View
     */
    public function newSeason()
    {
        return view('admin.new_season');
    }

    /**
     * Create a new season.
     *
     * @param \App\Http\Requests\Admin\CreateSeasonRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createSeason(CreateSeasonRequest $request)
    {
        $validated = $request->validated();

        Season::create($validated);

        return redirect()->back()->with('success', 'Season created successfully');
    }

    /**
     * Show the match played page.
     *
     * @return \Illuminate\View\View
     */
    public function matchPlayed()
    {
        $seasons = Season::all();
        $players = Player::all();
        return view('admin.match_played', compact('seasons', 'players'));
    }

    /**
     * Store a new match.
     *
     * @param \App\Http\Requests\Admin\StoreMatchRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeMatch(StoreMatchRequest $request)
    {
        $validated = $request->validated();

        FootballMatch::create($validated);

        return redirect()->back()->with('success', 'Match added successfully');
    }
}
