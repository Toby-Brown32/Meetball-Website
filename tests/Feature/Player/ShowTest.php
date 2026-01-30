<?php

declare(strict_types=1);

use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;

use function Pest\Laravel\get;

it('shows compare data when comparePlayer param is provided', function () {
    $season = Season::factory()->create();
    $playerA = Player::factory()->create();
    $playerB = Player::factory()->create();

    // create matches and assign stats for both players
    $m1 = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 2, 'salmon_goals' => 1]);
    $m2 = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 1, 'salmon_goals' => 1]);

    \DB::table('match_player')->insert([
        ['match_id' => $m1->id, 'player_id' => $playerA->id, 'team' => 'Les Bleus', 'played' => 1, 'reserve' => 0, 'goals' => 1, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m1->id, 'player_id' => $playerB->id, 'team' => 'Salmons', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m2->id, 'player_id' => $playerA->id, 'team' => 'Les Bleus', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 1, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m2->id, 'player_id' => $playerB->id, 'team' => 'Salmons', 'played' => 1, 'reserve' => 0, 'goals' => 1, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
    ]);

    $response = get(route('players.show', [$playerA->id, 'comparePlayer' => $playerB->id]));
    $response->assertStatus(200);
    $response->assertViewHasAll(['player', 'stats', 'statList', 'seasons', 'seasonId', 'allPlayers', 'radarStats', 'comparePlayer', 'compareStatList']);

    $data = $response->original->getData();
    expect($data['comparePlayer']->id)->toBe($playerB->id);
    expect(is_array($data['compareStatList']))->toBeTrue();
    expect(count($data['compareStatList']))->toBe(count($data['radarStats']));
});

it('shows player page without comparePlayer when not provided', function () {
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
    $response->assertViewHas('comparePlayer');
    $data = $response->original->getData();
    expect($data['comparePlayer'])->toBeNull();
});
