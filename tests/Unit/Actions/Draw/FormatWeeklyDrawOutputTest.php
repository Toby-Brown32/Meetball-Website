<?php

use App\Actions\Draw\FormatWeeklyDrawOutput;
use Carbon\Carbon;

describe('FormatWeeklyDrawOutput', function () {
    it('formats weekly draw output with teams and reserves', function () {
        $makePlayer = function (string $forename, string $surname) {
            return (object) ['forename' => $forename, 'surname' => $surname];
        };

        $teams = [
            'A' => [
                'players' => [
                    $makePlayer('Ryan', 'Test'),
                    $makePlayer('Ben', 'Test'),
                ],
            ],
            'B' => [
                'players' => [
                    $makePlayer('Adam', 'Test'),
                ],
            ],
            'reserves' => [
                $makePlayer('Stuart', 'Test'),
                $makePlayer('Chris', 'S'),
            ],
        ];

        $date = Carbon::parse('2026-01-22'); // Thursday

        $action = new FormatWeeklyDrawOutput();
        $out = $action($teams, $date);

        $expected = implode("\n", [
            'Teams for Thursday 22nd January 2026:',
            '',
            "Salmon's 🍣",
            'Ryan Test',
            'Ben Test',
            '',
            "Lemon's 🍋",
            'Adam Test',
            '',
            'Res1: Stuart Test',
            'Res2: Chris S',
            '',
            '18:30 Littledown pitch 5, £5 subs.',
        ]);

        expect($out)->toBe($expected);
    });

    it('formats weekly draw output without reserves', function () {
        $makePlayer = function (string $forename, string $surname) {
            return (object) ['forename' => $forename, 'surname' => $surname];
        };

        $teams = [
            'A' => ['players' => [$makePlayer('Luke', 'B')]],
            'B' => ['players' => [$makePlayer('Ollie', 'R')]],
            'reserves' => [],
        ];

        $date = Carbon::parse('2026-02-05');

        $action = new FormatWeeklyDrawOutput();
        $out = $action($teams, $date);

        expect($out)->toContain("Teams for Thursday 5th February 2026");
        expect($out)->toContain("Salmon's 🍣\nLuke B");
        expect($out)->toContain("Lemon's 🍋\nOllie R");
        expect($out)->not->toContain('Res1:');
        expect($out)->toEndWith("18:30 Littledown pitch 5, £5 subs.");
    });
});
