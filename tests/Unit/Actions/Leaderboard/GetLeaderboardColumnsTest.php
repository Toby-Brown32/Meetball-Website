<?php

declare(strict_types=1);

namespace Tests\Unit\Actions\Leaderboard;

use PHPUnit\Framework\TestCase;

class GetLeaderboardColumnsTest extends TestCase
{
    // ...test methods...
}

    use App\Actions\Leaderboard\GetLeaderboardColumns;

    describe('GetLeaderboardColumns', function () {
        it('returns correct columns for matches_played', function () {
            $action = new GetLeaderboardColumns();
            $columns = $action('matches_played');
            $labels = array_column($columns, 'label');
            expect($labels)->toContain('#');
            expect($labels)->toContain('Name');
            expect($labels)->toContain('Matches Played');
            expect($labels)->toContain('Played %');
        });

        it('returns correct columns for assists', function () {
            $action = new GetLeaderboardColumns();
            $columns = $action('assists');
            $labels = array_column($columns, 'label');
            expect($labels)->toContain('#');
            expect($labels)->toContain('Name');
            expect($labels)->toContain('Assists');
            expect($labels)->not->toContain('Matches Played');
            expect($labels)->not->toContain('Played %');
        });

        it('does not leak columns between stats', function () {
            $action = new GetLeaderboardColumns();
            $cols1 = $action('goals');
            $cols2 = $action('matches_played');
            $labels1 = array_column($cols1, 'label');
            $labels2 = array_column($cols2, 'label');
            expect($labels1)->not->toContain('Matches Played');
            expect($labels2)->toContain('Matches Played');
        });
    });
