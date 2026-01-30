<?php

use App\Actions\Leaderboard\GetLeaderboardStat;

describe('GetLeaderboardStat', function () {
    it('can be instantiated', function () {
        $action = new GetLeaderboardStat();
        expect($action)->toBeInstanceOf(GetLeaderboardStat::class);
    });

    it('delegates to GetGoalsLeaderboard for goals', function () {
        $action = new GetLeaderboardStat();
        $result = $action('goals');
        expect($result)->toBeIterable();
    });

    it('delegates to GetAssistsLeaderboard for assists', function () {
        $action = new GetLeaderboardStat();
        $result = $action('assists');
        expect($result)->toBeIterable();
    });

    it('throws for unknown stat', function () {
        $action = new GetLeaderboardStat();
        expect(fn() => $action('not_a_stat'))->toThrow(\InvalidArgumentException::class);
    });
});
