<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePlayerRequest;
use App\Http\Requests\Admin\UpdatePlayerRequest;
use App\Models\Player;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminPlayerController extends Controller
{
    public function index(): View
    {
        $players = Player::query()
            ->orderBy('surname')
            ->orderBy('forename')
            ->get();

        return view('admin.players.index', compact('players'));
    }

    public function create(): View
    {
        return view('admin.players.create');
    }

    public function store(StorePlayerRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['nickname'] = $validated['nickname'] ?: null;
        $validated['missed_games'] = isset($validated['missed_games']) ? (int) $validated['missed_games'] : 0;

        Player::create($validated);

        return redirect()->route('admin.players.index')->with('success', 'Player added successfully');
    }

    public function edit(Player $player): View
    {
        return view('admin.players.edit', compact('player'));
    }

    public function update(UpdatePlayerRequest $request, Player $player): RedirectResponse
    {
        $validated = $request->validated();
        $validated['nickname'] = $validated['nickname'] ?: null;
        $validated['missed_games'] = isset($validated['missed_games']) ? (int) $validated['missed_games'] : $player->missed_games;

        $player->update($validated);

        return redirect()->route('admin.players.index')->with('success', 'Player updated successfully');
    }

    public function destroy(Player $player): RedirectResponse
    {
        if ($player->matches()->exists()) {
            return redirect()->back()->with('error', 'Cannot delete a player with match history.');
        }

        $player->delete();

        return redirect()->route('admin.players.index')->with('success', 'Player deleted successfully');
    }

    public function resetMissed(Request $request): RedirectResponse
    {
        Player::query()->update(['missed_games' => 0]);

        return redirect()->route('admin.players.index')->with('success', 'Missed games reset to 0 for all players');
    }
}
