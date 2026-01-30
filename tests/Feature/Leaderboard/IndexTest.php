<?php

declare(strict_types=1);

use App\Models\Season;
use App\Models\Player;
use App\Models\FootballMatch;

use function Pest\Laravel\get;

it('shows the leaderboard index with stats and seasons', function () {
    $response = get(route('leaderboard.index'));

    $response->assertStatus(200);
    $response->assertViewHasAll(['stats', 'season', 'seasons']);

    $data = $response->original->getData();
    expect(array_keys($data['stats']))->toContain('goals');
    expect(array_keys($data['stats']))->toContain('assists');
});

it('shows the goals stat page and returns players for the season', function () {
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create(['forename' => 'Goal', 'surname' => 'Getter']);

    \DB::table('match_player')->insert([
        'match_id' => $match->id,
        'player_id' => $player->id,
        'team' => 'Les Bleus',
        'played' => 1,
        'reserve' => 0,
        'goals' => 3,
        'assists' => 1,
        'season_id' => $season->id,
        'player_of_match' => 0,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $response = get(route('leaderboard.stat', 'goals'));
    $response->assertStatus(200);
    $response->assertViewHasAll(['players', 'stat', 'season', 'seasons', 'columns', 'statOptions']);

    $data = $response->original->getData();
    $players = $data['players'];
    expect($players->first()->id)->toBe($player->id);
});
