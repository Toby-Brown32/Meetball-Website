<?php

use App\Actions\LeagueTable\CalculatePlayerLeagueTable;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('CalculatePlayerLeagueTable', function () {
    beforeEach(function () {
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
        Player::truncate();
    });

    it('returns players ordered by points, wins, played', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        DB::table('match_player')->insert([
            ['match_id' => $match->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['match_id' => $match->id, 'player_id' => $player2->id, 'team' => 'Salmons', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
        $action = new CalculatePlayerLeagueTable();
        $result = $action($season->id);
        expect($result)->toHaveCount(2);
        expect($result[0]['player'])->toBe('Alice Smith');
        expect($result[0]['points'])->toBeGreaterThan($result[1]['points']);
    });

    it('handles draws correctly', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 1,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        DB::table('match_player')->insert([
            ['match_id' => $match->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['match_id' => $match->id, 'player_id' => $player2->id, 'team' => 'Salmons', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
        $action = new CalculatePlayerLeagueTable();
        $result = $action($season->id);
        expect($result[0]['points'])->toBe(1);
        expect($result[1]['points'])->toBe(1);
        expect($result[0]['draws'] ?? 0)->toBe(1);
        expect($result[1]['draws'] ?? 0)->toBe(1);
    });

    it('returns all seasons if season is all', function () {
        $season1 = Season::factory()->create();
        $season2 = Season::factory()->create();
        $player = Player::factory()->create();
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
        DB::table('match_player')->insert([
            ['match_id' => $match1->id, 'player_id' => $player->id, 'team' => 'Les Bleus', 'played' => true, 'reserve' => false, 'season_id' => $season1->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['match_id' => $match2->id, 'player_id' => $player->id, 'team' => 'Les Bleus', 'played' => true, 'reserve' => false, 'season_id' => $season2->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
        $action = new CalculatePlayerLeagueTable();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]['played'])->toBe(2);
    });

    it('ignores players with no matches played', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        DB::table('match_player')->insert([
            ['match_id' => $match->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
        $action = new CalculatePlayerLeagueTable();
        $result = $action($season->id);
        $ids = array_column($result, 'player_id');
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });

    it('does not affect player stats when editing another player', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
        DB::table('match_player')->insert([
            ['match_id' => $match->id, 'player_id' => $player1->id, 'team' => 'Les Bleus', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['match_id' => $match->id, 'player_id' => $player2->id, 'team' => 'Salmons', 'played' => true, 'reserve' => false, 'season_id' => $season->id, 'goals' => 0, 'assists' => 0, 'created_at' => now(), 'updated_at' => now()],
        ]);
        $action = new CalculatePlayerLeagueTable();
        $result = $action($season->id);
        $aliceStats = collect($result)->firstWhere('player_id', $player1->id);
        DB::table('match_player')->where('player_id', $player2->id)->update(['played' => 10]);
        $result2 = $action($season->id);
        $aliceStats2 = collect($result2)->firstWhere('player_id', $player1->id);
        expect($aliceStats2)->toBe($aliceStats);
    });
});
