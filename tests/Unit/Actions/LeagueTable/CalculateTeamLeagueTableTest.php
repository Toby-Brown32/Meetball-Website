<?php

use App\Actions\LeagueTable\CalculateTeamLeagueTable;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('CalculateTeamLeagueTable', function () {
    beforeEach(function () {
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
    });

    it('returns teams ordered by points, gd, gf', function () {
        $season = Season::factory()->create();
        $match1 = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        $match2 = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 1,
            'salmon_goals' => 3,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        $action = new CalculateTeamLeagueTable();
        $result = $action($season->id);
        expect($result)->toHaveCount(4);
        expect($result[0]['points'])->toBeGreaterThanOrEqual($result[1]['points']);
        expect($result[1]['gd'])->toBeGreaterThanOrEqual($result[2]['gd']);
        expect($result[2]['gf'])->toBeGreaterThanOrEqual($result[3]['gf']);
    });

    it('handles draws, wins, and losses', function () {
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 1,
            'salmon_goals' => 1,
            'lemon_goals' => null,
            'green_goals' => null,
        ]);
        $action = new CalculateTeamLeagueTable();
        $result = $action($season->id);
        $bleus = collect($result)->firstWhere('team', 'Les Bleus');
        $salmons = collect($result)->firstWhere('team', 'Salmons');
        expect($bleus['drawn'])->toBe(1);
        expect($salmons['drawn'])->toBe(1);
        expect($bleus['points'])->toBe(1);
        expect($salmons['points'])->toBe(1);
    });

    it('returns all seasons if season is all', function () {
        $season1 = Season::factory()->create();
        $season2 = Season::factory()->create();
        $match1 = FootballMatch::factory()->create([
            'season_id' => $season1->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        $match2 = FootballMatch::factory()->create([
            'season_id' => $season2->id,
            'bleu_goals' => 1,
            'salmon_goals' => 0,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        $action = new CalculateTeamLeagueTable();
        $result = $action('all');
        $bleus = collect($result)->firstWhere('team', 'Les Bleus');
        expect($bleus['played'])->toBeGreaterThanOrEqual(2);
    });

    it('ignores teams with no matches played', function () {
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => null,
            'green_goals' => null,
        ]);
        $action = new CalculateTeamLeagueTable();
        $result = $action($season->id);
        $teams = array_column($result, 'team');
        expect($teams)->toContain('Les Bleus');
        expect($teams)->toContain('Salmons');
        expect($teams)->not->toContain('Lemons');
        expect($teams)->not->toContain('Greens');
    });

    it('does not affect team stats when editing another team', function () {
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        $action = new CalculateTeamLeagueTable();
        $result = $action($season->id);
        $bleusStats = collect($result)->firstWhere('team', 'Les Bleus');
        $match->update(['bleu_goals' => 5]);
        $result2 = $action($season->id);
        $bleusStats2 = collect($result2)->firstWhere('team', 'Les Bleus');
        expect($bleusStats2)->not->toBe($bleusStats);
    });
});
