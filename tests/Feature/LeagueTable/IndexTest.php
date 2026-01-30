<?php

declare(strict_types=1);

use App\Models\Season;
use App\Actions\LeagueTable\CalculateTeamLeagueTable;

use function Pest\Laravel\get;

it('shows the teams league table page with table and columns', function () {
    $season = Season::factory()->create();

    // stub table calculation to return a simple collection
    app()->bind(CalculateTeamLeagueTable::class, function () use ($season) {
        return new class {
            public function __invoke($seasonId)
            {
                return collect([ ['team' => 'Les Bleus', 'points' => 3] ]);
            }
        };
    });

    $response = get(route('league.table'));
    $response->assertStatus(200);
    $response->assertViewHasAll(['table', 'season', 'seasons', 'type', 'columns']);
});

it('shows the players league table when type=players', function () {
    $season = Season::factory()->create();

    $response = get(route('league.table', ['type' => 'players']));

    $response->assertStatus(200);
    $response->assertViewHasAll(['table', 'season', 'seasons', 'columns']);
});
