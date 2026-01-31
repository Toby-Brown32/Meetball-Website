<?php

declare(strict_types=1);

use App\Actions\Player\GetRadarMaxStats;
use App\Models\FootballMatch;
use App\Models\Player;
use App\Models\Season;
use Illuminate\Support\Facades\DB;

it('returns the correct max points_per_game for a season', function () {
    $season = Season::factory()->create();
    $playerA = Player::factory()->create();
    $playerB = Player::factory()->create();

    $winMatch = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 2,
        'salmon_goals' => 0,
        'lemon_goals' => null,
        'green_goals' => null,
    ]);

    $drawMatch = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 1,
        'salmon_goals' => 1,
        'lemon_goals' => null,
        'green_goals' => null,
    ]);

    DB::table('match_player')->insert([
        [
            'match_id' => $winMatch->id,
            'player_id' => $playerA->id,
            'team' => 'Les Bleus',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
        [
            'match_id' => $drawMatch->id,
            'player_id' => $playerB->id,
            'team' => 'Les Bleus',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
    ]);

    $action = new GetRadarMaxStats();
    $maxStats = $action($season->id);

    expect($maxStats['points_per_game'])->toBe(3.0);
});
