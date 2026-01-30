<?php

declare(strict_types=1);

use App\Models\Season;
use App\Models\Player;
use App\Models\FootballMatch;

use function Pest\Laravel\get;

it('orders players by points and wins and excludes non-playing players', function () {
    $season = Season::factory()->create();

    $player1 = Player::factory()->create(['forename' => 'Winner', 'surname' => 'One']);
    $player2 = Player::factory()->create(['forename' => 'Drawer', 'surname' => 'Two']);
    $player3 = Player::factory()->create(); // will not play

    // match1: player1 (Les Bleus) beats player2 (Salmons)
    $m1 = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 2, 'salmon_goals' => 0]);
    \DB::table('match_player')->insert([
        ['match_id' => $m1->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => 1, 'reserve' => 0, 'goals' => 1, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m1->id, 'player_id' => $player2->id, 'team' => 'Salmons', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
    ]);

    // match2: draw between teams with both players
    $m2 = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 1, 'salmon_goals' => 1]);
    \DB::table('match_player')->insert([
        ['match_id' => $m2->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
        ['match_id' => $m2->id, 'player_id' => $player2->id, 'team' => 'Salmons', 'played' => 1, 'reserve' => 0, 'goals' => 0, 'assists' => 0, 'season_id' => $season->id, 'player_of_match' => 0, 'created_at' => now(), 'updated_at' => now()],
    ]);

    $response = get(route('league.table', ['type' => 'players']));
    $response->assertStatus(200);
    $response->assertViewHas('table');

    $data = $response->original->getData();
    $table = $data['table'];

    // both players should have 2 played matches and the non-playing player should be excluded
    expect(collect($table)->pluck('player_id'))->toContain($player1->id);
    expect(collect($table)->pluck('player_id'))->toContain($player2->id);
    expect($table[0]['played'])->toBe(2);
    expect(collect($table)->pluck('player_id'))->not->toContain($player3->id);
});
