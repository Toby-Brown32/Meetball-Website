<?php

declare(strict_types=1);

use Illuminate\Support\Facades\DB;
use App\Models\Player;
use App\Models\FootballMatch;
use App\Models\Season;
use App\Actions\Player\CalculatePlayerSpecialStats;

it('counts clean sheets and player_of_match occurrences', function () {
    $player = Player::factory()->create();
    $season = Season::factory()->create();

    $match = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 2,
        'salmon_goals' => 0,
        'player_of_match_id' => $player->id,
    ]);

    DB::table('match_player')->insert([
        'match_id' => $match->id,
        'player_id' => $player->id,
        'team' => 'Les Bleus',
        'played' => 1,
        'reserve' => 0,
        'goals' => 1,
        'assists' => 0,
        'season_id' => $season->id,
        'player_of_match' => 0,
    ]);

    $matchPlayers = DB::table('match_player')->where('player_id', $player->id)->get();
    $matches = DB::table('matches')->whereIn('id', [$match->id])->get()->keyBy('id');

    $action = new CalculatePlayerSpecialStats();
    $result = $action($matchPlayers, $matches, $player);

    expect($result['clean_sheets'])->toBe(1);
    expect($result['player_of_match'])->toBe(1);
    expect($result['hattricks'])->toBe(0);
    expect($result['braces'])->toBe(0);
});

it('counts hattricks and braces per match', function () {
    $player = Player::factory()->create();
    $season = Season::factory()->create();

    $matchH = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 1,
        'salmon_goals' => 1,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => null,
    ]);
    $matchB = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 1,
        'salmon_goals' => 1,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => null,
    ]);

    DB::table('match_player')->insert([
        [
            'match_id' => $matchH->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 3,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
        [
            'match_id' => $matchB->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 2,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
    ]);

    $matchPlayers = DB::table('match_player')->where('player_id', $player->id)->get();
    $matches = DB::table('matches')->whereIn('id', [$matchH->id, $matchB->id])->get()->keyBy('id');

    $action = new CalculatePlayerSpecialStats();
    $result = $action($matchPlayers, $matches, $player);

    expect($result['hattricks'])->toBe(1);
    expect($result['braces'])->toBe(1);
    expect($result['clean_sheets'])->toBe(0);
    expect($result['player_of_match'])->toBe(0);
});
