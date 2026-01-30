<?php

declare(strict_types=1);

namespace Tests\Unit\Actions\Player;

use Illuminate\Support\Facades\DB;
use Mockery;
use PHPUnit\Framework\TestCase;

describe('CalculatePlayerAggregateStats', function () {
    beforeEach(function () {
        if (!class_exists('DB')) {
            class_alias(\Illuminate\Support\Facades\DB::class, 'DB');
        }
    });

    it('returns zero stats for no matches', function () {
        $action = new \App\Actions\Player\CalculatePlayerAggregateStats();
        $matchPlayers = collect([]);
        $matches = [];
        $player = (object) ['id' => 1];
        \DB::shouldReceive('table')->andReturnSelf();
        \DB::shouldReceive('count')->andReturn(0);
        $stats = $action($matchPlayers, $matches, $player);
        expect($stats['matches_played'])->toBe(0);
        expect($stats['team_goals_for'])->toBe(0);
        expect($stats['player_goals'])->toBe(0);
        expect($stats['points'])->toBe(0);
    });

    it('calculates stats for single win', function () {
        $action = new \App\Actions\Player\CalculatePlayerAggregateStats();
        $matchPlayers = collect([
            (object) ['match_id' => 1, 'team' => 'Les Bleus', 'goals' => 2, 'assists' => 1],
        ]);
        $matches = [
            1 => (object) ['bleu_goals' => 2, 'salmon_goals' => 1, 'lemon_goals' => null, 'green_goals' => null],
        ];
        $player = (object) ['id' => 1];
        \DB::shouldReceive('table')->andReturnSelf();
        \DB::shouldReceive('where')->andReturnSelf();
        \DB::shouldReceive('count')->andReturn(1);
        $stats = $action($matchPlayers, $matches, $player, 1);
        expect($stats['matches_played'])->toBe(1);
        expect($stats['team_goals_for'])->toBe(2);
        expect($stats['player_goals'])->toBe(2);
        expect($stats['points'])->toBe(3);
        expect($stats['wins'])->toBe(1);
        expect($stats['draws'])->toBe(0);
        expect($stats['losses'])->toBe(0);
    });

    it('calculates stats for draw', function () {
        $action = new \App\Actions\Player\CalculatePlayerAggregateStats();
        $matchPlayers = collect([
            (object) ['match_id' => 1, 'team' => 'Les Bleus', 'goals' => 1, 'assists' => 0],
        ]);
        $matches = [
            1 => (object) ['bleu_goals' => 1, 'salmon_goals' => 1, 'lemon_goals' => null, 'green_goals' => null],
        ];
        $player = (object) ['id' => 1];
        \DB::shouldReceive('table')->andReturnSelf();
        \DB::shouldReceive('where')->andReturnSelf();
        \DB::shouldReceive('count')->andReturn(1);
        $stats = $action($matchPlayers, $matches, $player, 1);
        expect($stats['draws'])->toBe(1);
        expect($stats['points'])->toBe(1);
    });

    it('calculates stats for loss', function () {
        $action = new \App\Actions\Player\CalculatePlayerAggregateStats();
        $matchPlayers = collect([
            (object) ['match_id' => 1, 'team' => 'Les Bleus', 'goals' => 0, 'assists' => 0],
        ]);
        $matches = [
            1 => (object) ['bleu_goals' => 0, 'salmon_goals' => 2, 'lemon_goals' => null, 'green_goals' => null],
        ];
        $player = (object) ['id' => 1];
        \DB::shouldReceive('table')->andReturnSelf();
        \DB::shouldReceive('where')->andReturnSelf();
        \DB::shouldReceive('count')->andReturn(1);
        $stats = $action($matchPlayers, $matches, $player, 1);
        expect($stats['losses'])->toBe(1);
        expect($stats['points'])->toBe(0);
    });
});
