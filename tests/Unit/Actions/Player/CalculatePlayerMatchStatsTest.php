<?php

declare(strict_types=1);

use Illuminate\Support\Facades\DB;
use App\Models\Player;
use App\Models\FootballMatch;
use App\Models\Season;
use App\Actions\Player\CalculatePlayerMatchStats;

it('returns only played matches and matches are keyed', function () {
    $player = Player::factory()->create();
    $season = Season::factory()->create();

    $matchPlayed = FootballMatch::factory()->create(['season_id' => $season->id]);
    $matchNotPlayed = FootballMatch::factory()->create(['season_id' => $season->id]);

    DB::table('match_player')->insert([
        [
            'match_id' => $matchPlayed->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
        [
            'match_id' => $matchNotPlayed->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 0,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
    ]);

    $action = new CalculatePlayerMatchStats();
    [$matchPlayers, $matches] = $action($player);

    expect($matchPlayers)->toHaveCount(1);
    expect($matchPlayers->first()->match_id)->toBe($matchPlayed->id);

    expect($matches->toArray())->toHaveKey($matchPlayed->id);
    expect($matches->toArray())->not->toHaveKey($matchNotPlayed->id);
});

it('filters results by season id', function () {
    $player = Player::factory()->create();
    $seasonA = Season::factory()->create();
    $seasonB = Season::factory()->create();

    $matchA = FootballMatch::factory()->create(['season_id' => $seasonA->id]);
    $matchB = FootballMatch::factory()->create(['season_id' => $seasonB->id]);

    DB::table('match_player')->insert([
        [
            'match_id' => $matchA->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $seasonA->id,
            'player_of_match' => 0,
        ],
        [
            'match_id' => $matchB->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $seasonB->id,
            'player_of_match' => 0,
        ],
    ]);

    $action = new CalculatePlayerMatchStats();
    [$matchPlayers, $matches] = $action($player, $seasonA->id);

    expect($matchPlayers)->toHaveCount(1);
    expect($matchPlayers->first()->match_id)->toBe($matchA->id);

    expect($matches->toArray())->toHaveKey($matchA->id);
    expect($matches->toArray())->not->toHaveKey($matchB->id);
});
