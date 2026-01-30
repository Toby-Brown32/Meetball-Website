<?php

declare(strict_types=1);

use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;

use function Pest\Laravel\get;

it('shows the players index with a list of players', function () {
    $players = Player::factory()->count(3)->create();

    $response = get(route('players.index'));
    $response->assertStatus(200);
    $response->assertViewHas('players');
    $data = $response->original->getData();
    expect($data['players']->count())->toBeGreaterThanOrEqual(3);
});

it('shows a player page with stats and radar data', function () {
    $season = Season::factory()->create();
    $player = Player::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 1, 'salmon_goals' => 0]);

    \DB::table('match_player')->insert([
        'match_id' => $match->id,
        'player_id' => $player->id,
        'team' => 'Les Bleus',
        'played' => 1,
        'reserve' => 0,
        'goals' => 1,
        'assists' => 0,
        'season_id' => $season->id,
        'player_of_match' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $response = get(route('players.show', $player->id));
    $response->assertStatus(200);
    $response->assertViewHasAll(['player', 'stats', 'statList', 'seasons', 'seasonId', 'allPlayers', 'radarStats']);
    $data = $response->original->getData();
    expect($data['player']->id)->toBe($player->id);
    expect($data['stats']['player_goals'])->toBe(1);
});
