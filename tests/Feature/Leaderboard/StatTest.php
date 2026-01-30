<?php

declare(strict_types=1);

use App\Models\Season;
use App\Models\Player;
use App\Models\FootballMatch;

use function Pest\Laravel\get;

it('shows the assists stat page and lists top assistants', function () {
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create(['forename' => 'Assist', 'surname' => 'Master']);

    \DB::table('match_player')->insert([
        'match_id' => $match->id,
        'player_id' => $player->id,
        'team' => 'Les Bleus',
        'played' => 1,
        'reserve' => 0,
        'goals' => 0,
        'assists' => 2,
        'season_id' => $season->id,
        'player_of_match' => 0,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $response = get(route('leaderboard.stat', 'assists'));
    $response->assertStatus(200);
    $response->assertViewHas('players');
    $data = $response->original->getData();
    $players = $data['players'];
    expect($players->first()->id)->toBe($player->id);
});

it('shows player_of_match leaderboard and orders by motm count', function () {
    $season = Season::factory()->create();
    $player1 = Player::factory()->create(['forename' => 'Player', 'surname' => 'One']);
    $player2 = Player::factory()->create(['forename' => 'Player', 'surname' => 'Two']);

    // Create matches and corresponding match_player rows marking player_of_match
    $m1 = FootballMatch::factory()->create(['season_id' => $season->id]);
    $m2 = FootballMatch::factory()->create(['season_id' => $season->id]);
    $m3 = FootballMatch::factory()->create(['season_id' => $season->id]);
    \DB::table('match_player')->insert([
        ['match_id' => $m1->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m2->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m3->id, 'player_id' => $player2->id, 'team' => 'Salmons', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 1, 'created_at' => now(), 'updated_at' => now()],
    ]);

    $response = get(route('leaderboard.stat', 'player_of_match'));
    $response->assertStatus(200);
    $data = $response->original->getData();
    $players = $data['players'];

    // First result should be player1 with higher motm count
    expect($players->first()->id)->toBe($player1->id);
});
