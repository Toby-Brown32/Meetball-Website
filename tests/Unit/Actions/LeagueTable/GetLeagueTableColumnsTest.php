<?php

declare(strict_types=1);

namespace Tests\Unit\Actions\LeagueTable;

use PHPUnit\Framework\TestCase;

describe('GetLeagueTableColumns', function () {
    it('returns player columns when isPlayers true', function () {
        $action = new \App\Actions\LeagueTable\GetLeagueTableColumns();
        $columns = $action(true);
        $labels = array_column($columns, 'label');
        $expected = ['Player', 'Played', 'Wins', 'Points'];
        expect($labels)->toEqual($expected);
        expect(is_callable($columns[0]['render']))->toBeTrue();
    });

    it('returns team columns when isPlayers false', function () {
        $action = new \App\Actions\LeagueTable\GetLeagueTableColumns();
        $columns = $action(false);
        $labels = array_column($columns, 'label');
        $expected = ['Team', 'Played', 'Won', 'Drawn', 'Lost', 'GF', 'GA', 'GD', 'Points'];
        expect($labels)->toEqual($expected);
        expect(isset($columns[0]['render']))->toBeFalse();
    });

    it('render functions return expected values', function () {
        $action = new \App\Actions\LeagueTable\GetLeagueTableColumns();
        $playerColumns = $action(true);
        $row = ['player_id' => 1, 'player' => 'Test Player'];

        $html = $playerColumns[0]['render']($row);
        expect($html)->toContain('players/1');
        expect($html)->toContain('Test Player');

        $plainRow = ['player' => 'Test Player'];
        expect($playerColumns[0]['render']($plainRow))->toBe('Test Player');
    });
});
