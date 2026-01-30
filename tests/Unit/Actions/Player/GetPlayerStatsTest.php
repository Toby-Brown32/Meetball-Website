<?php

declare(strict_types=1);

use Illuminate\Support\Facades\DB;
use App\Models\Player;
use App\Models\FootballMatch;
use App\Models\Season;
use App\Actions\Player\GetPlayerStats;

it('returns combined aggregate and special stats for a season', function () {
    $player = Player::factory()->create();
    $season = Season::factory()->create();

    $match1 = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 2,
        'salmon_goals' => 0,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => $player->id,
    ]);
    $match2 = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 1,
        'salmon_goals' => 3,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => null,
    ]);
    $match3 = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 2,
        'salmon_goals' => 2,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => null,
    ]);
    $match4 = FootballMatch::factory()->create([
        'season_id' => $season->id,
        'bleu_goals' => 0,
        'salmon_goals' => 0,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => null,
    ]);

    DB::table('match_player')->insert([
        [
            'match_id' => $match1->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 1,
            'reserve' => 0,
            'goals' => 1,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
        [
            'match_id' => $match2->id,
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
            'match_id' => $match3->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 2,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
        [
            'match_id' => $match4->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 0,
            'reserve' => 1,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'player_of_match' => 0,
        ],
    ]);

    $action = new GetPlayerStats();
    $stats = $action($player, $season->id);

    expect($stats['matches_played'])->toBe(3)
        ->and($stats['player_goals'])->toBe(6)
        ->and($stats['player_assists'])->toBe(0)
        ->and($stats['wins'])->toBe(2)
        ->and($stats['draws'])->toBe(1)
        ->and($stats['losses'])->toBe(0)
        ->and($stats['points'])->toBe(7)
        ->and($stats['team_goals_for'])->toBe(7)
        ->and($stats['team_goals_against'])->toBe(3)
        ->and($stats['team_goal_difference'])->toBe(4)
        ->and($stats['played_pct'])->toBe(round(100 * 3 / 4, 1))
        ->and($stats['points_per_game'])->toBe(round(7 / 3, 2))
        ->and($stats['goals_to_game_pct'])->toBe(200.0)
        ->and($stats['matches_missed'])->toBe(1)
        ->and($stats['clean_sheets'])->toBe(1)
        ->and($stats['hattricks'])->toBe(1)
        ->and($stats['braces'])->toBe(1)
        ->and($stats['player_of_match'])->toBe(1);
});
