<?php

use App\Actions\Stats\ValidateMatchPlayerStats;

describe('ValidateMatchPlayerStats', function () {
    it('requires played or reserve', function () {
        $players = [1 => ['played' => false, 'reserve' => false, 'team' => 'Les Bleus']];
        $selected = [1];
        $action = new ValidateMatchPlayerStats();
        [$errors, $valid] = $action($players, $selected);
        expect($errors)->toHaveKey('players.1.played');
        expect($valid)->toBeFalse();
    });

    it('rejects both played and reserve', function () {
        $players = [1 => ['played' => true, 'reserve' => true, 'team' => 'Les Bleus']];
        $selected = [1];
        $action = new ValidateMatchPlayerStats();
        [$errors, $valid] = $action($players, $selected);
        expect($errors)->toHaveKey('players.1.played');
        expect($valid)->toBeFalse();
    });

    it('requires team if played', function () {
        $players = [1 => ['played' => true, 'reserve' => false, 'team' => '']];
        $selected = [1];
        $action = new ValidateMatchPlayerStats();
        [$errors, $valid] = $action($players, $selected);
        expect($errors)->toHaveKey('players.1.team');
        expect($valid)->toBeFalse();
    });

    it('passes for valid input', function () {
        $players = [1 => ['played' => true, 'reserve' => false, 'team' => 'Les Bleus']];
        $selected = [1];
        $action = new ValidateMatchPlayerStats();
        [$errors, $valid] = $action($players, $selected);
        expect($errors)->toBeEmpty();
        expect($valid)->toBeTrue();
    });

    it('reports multiple errors for multiple players', function () {
        $players = [
            1 => ['played' => false, 'reserve' => false, 'team' => ''],
            2 => ['played' => true, 'reserve' => true, 'team' => ''],
            3 => ['played' => true, 'reserve' => false, 'team' => ''],
        ];
        $selected = [1, 2, 3];
        $action = new ValidateMatchPlayerStats();
        [$errors, $valid] = $action($players, $selected);
        expect($errors)->toHaveKey('players.1.played');
        expect($errors)->toHaveKey('players.2.played');
        expect($errors)->toHaveKey('players.3.team');
        expect($valid)->toBeFalse();
    });
});
