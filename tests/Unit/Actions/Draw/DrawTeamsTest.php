<?php

use App\Actions\Draw\DrawTeams;
use App\Models\Player;
use Illuminate\Support\Collection;

describe('DrawTeams', function () {
    beforeEach(function () {
        \DB::table('match_player')->truncate();
        Player::truncate();
    });

    it('splits players into two balanced teams (even)', function () {
        $players = Player::factory()->count(8)->create();
        $drawn = new Collection($players->map(fn($p) => $p->toArray()));
        $action = new DrawTeams();
        $result = $action($drawn);
        expect($result['A']['players']->count() + $result['B']['players']->count())->toBe(8);
        $aIds = collect($result['A']['players'])->pluck('id');
        $bIds = collect($result['B']['players'])->pluck('id');
        expect($aIds->intersect($bIds))->toHaveCount(0);
        expect(abs($result['A']['level'] - $result['B']['level']))->toBeLessThanOrEqual(5);
    });

    it('splits players into two balanced teams (odd)', function () {
        $players = Player::factory()->count(7)->create();
        $drawn = new Collection($players->map(fn($p) => $p->toArray()));
        $action = new DrawTeams();
        $result = $action($drawn);
        expect($result['A']['players']->count() + $result['B']['players']->count())->toBe(7);
        $aIds = collect($result['A']['players'])->pluck('id');
        $bIds = collect($result['B']['players'])->pluck('id');
        expect($aIds->intersect($bIds))->toHaveCount(0);
        expect(abs($result['A']['level'] - $result['B']['level']))->toBeLessThanOrEqual(5);
    });

    it('returns all players, none lost or duplicated', function () {
        $players = Player::factory()->count(10)->create();
        $drawn = new Collection($players->map(fn($p) => $p->toArray()));
        $action = new DrawTeams();
        $result = $action($drawn);
        $aIds = collect($result['A']['players'])->pluck('id');
        $bIds = collect($result['B']['players'])->pluck('id');
        $allIds = $aIds->merge($bIds)->sort()->values();
        $expectedIds = $players->pluck('id')->sort()->values();
        expect($allIds)->toEqual($expectedIds);
    });

    it('returns fallback if no balance possible', function () {
        // All players have very high or very low level
        $players = collect([
            ...Player::factory()->count(4)->create(['player_level' => 1]),
            ...Player::factory()->count(4)->create(['player_level' => 10]),
        ]);
        $drawn = new Collection($players->map(fn($p) => $p->toArray()));
        $action = new DrawTeams();
        // Set maxTries=0 to force fallback immediately
        $result = $action($drawn, 0);
        expect($result['A']['players']->count() + $result['B']['players']->count())->toBe(8);
        $aIds = collect($result['A']['players'])->pluck('id');
        $bIds = collect($result['B']['players'])->pluck('id');
        expect($aIds->intersect($bIds))->toHaveCount(0);
        // Don't assert on level difference, just that fallback returns a valid split
    });

    it('works with a single player', function () {
        $player = Player::factory()->create();
        $drawn = new Collection([$player->toArray()]);
        $action = new DrawTeams();
        $result = $action($drawn);
        expect($result['A']['players']->count() + $result['B']['players']->count())->toBe(1);
    });
});
