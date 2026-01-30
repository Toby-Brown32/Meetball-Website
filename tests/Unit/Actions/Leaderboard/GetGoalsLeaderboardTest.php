<?php

use App\Actions\Leaderboard\GetGoalsLeaderboard;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('GetGoalsLeaderboard', function () {
    beforeEach(function () {
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
        Player::truncate();
    });

    it('can be instantiated', function () {
        $action = new GetGoalsLeaderboard();
        expect($action)->toBeInstanceOf(GetGoalsLeaderboard::class);
    });

    it('returns players ordered by goals', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $player3 = Player::factory()->create(['forename' => 'Charlie', 'surname' => 'Brown']);

        $match1 = FootballMatch::factory()->create(['season_id' => $season->id]);
        $match2 = FootballMatch::factory()->create(['season_id' => $season->id]);

        DB::table('match_player')->insert([
            [
                'match_id' => $match1->id,
                'player_id' => $player1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 2,
                'assists' => 1,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match2->id,
                'player_id' => $player2->id,
                'team' => 'Salmons',
                'played' => true,
                'reserve' => false,
                'goals' => 3,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match1->id,
                'player_id' => $player3->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 1,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $action = new GetGoalsLeaderboard();
        $result = $action($season->id);
        expect($result)->toHaveCount(3);
        expect($result[0]->goals)->toBeGreaterThanOrEqual($result[1]->goals);
        expect($result[1]->goals)->toBeGreaterThanOrEqual($result[2]->goals);
    });

    it('returns only the top N players if limit is set', function () {
        $season = Season::factory()->create();
        $players = Player::factory()->count(5)->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        foreach ($players as $i => $player) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $player->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 5 - $i,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $action = new GetGoalsLeaderboard();
        $result = $action($season->id, 3);
        expect($result)->toHaveCount(3);
    });

    it('returns goals for all seasons if seasonId is all', function () {
        $season1 = Season::factory()->create();
        $season2 = Season::factory()->create();
        $player = Player::factory()->create();
        $match1 = FootballMatch::factory()->create(['season_id' => $season1->id]);
        $match2 = FootballMatch::factory()->create(['season_id' => $season2->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match1->id,
                'player_id' => $player->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 2,
                'assists' => 0,
                'season_id' => $season1->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match2->id,
                'player_id' => $player->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 3,
                'assists' => 0,
                'season_id' => $season2->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalsLeaderboard();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]->goals)->toBe(5);
    });

    it('does not affect player goals when editing another player', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 4,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match->id,
                'player_id' => $player2->id,
                'team' => 'Salmons',
                'played' => true,
                'reserve' => false,
                'goals' => 2,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalsLeaderboard();
        $result = $action($season->id);
        $aliceGoals = collect($result)->firstWhere('id', $player1->id)->goals;
        // Now edit player2's match_player record to have more goals (should not affect Alice)
        DB::table('match_player')->where('player_id', $player2->id)->update(['goals' => 10]);
        $result2 = $action($season->id);
        $aliceGoals2 = collect($result2)->firstWhere('id', $player1->id)->goals;
        expect($aliceGoals2)->toBe($aliceGoals);
    });

    it('ignores players with no matches played', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 2,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalsLeaderboard();
        $result = $action($season->id);
        $ids = $result->pluck('id')->all();
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });
});
