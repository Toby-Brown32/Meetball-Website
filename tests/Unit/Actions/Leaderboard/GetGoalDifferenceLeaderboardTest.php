<?php

use App\Actions\Leaderboard\GetGoalDifferenceLeaderboard;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('GetGoalDifferenceLeaderboard', function () {
    beforeEach(function () {
        // Truncate in order: match_player, matches, then seasons to avoid FK constraint errors
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
        Player::truncate();
    });

    it('can be instantiated', function () {
        $action = new \App\Actions\Leaderboard\GetGoalDifferenceLeaderboard();
        expect($action)->toBeInstanceOf(\App\Actions\Leaderboard\GetGoalDifferenceLeaderboard::class);
    });

    it('returns players ordered by goal difference', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $player3 = Player::factory()->create(['forename' => 'Charlie', 'surname' => 'Brown']);

        $match1 = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 5, 'salmon_goals' => 2, 'lemon_goals' => 0, 'green_goals' => 0]);
        $match2 = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 1, 'salmon_goals' => 3, 'lemon_goals' => 0, 'green_goals' => 0]);

        DB::table('match_player')->insert([
            [
                'match_id' => $match1->id,
                'player_id' => $player1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
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
                'goals' => 0,
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
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $action = new GetGoalDifferenceLeaderboard();
        $result = $action($season->id);
        expect($result)->toHaveCount(3);
        expect($result[0]->goal_difference)->toBeGreaterThanOrEqual($result[1]->goal_difference);
        expect($result[1]->goal_difference)->toBeGreaterThanOrEqual($result[2]->goal_difference);
    });

    it('returns only the top N players if limit is set', function () {
        $season = Season::factory()->create();
        $players = Player::factory()->count(5)->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 10, 'salmon_goals' => 1, 'lemon_goals' => 0, 'green_goals' => 0]);
        foreach ($players as $player) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $player->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $action = new GetGoalDifferenceLeaderboard();
        $result = $action($season->id, 3);
        expect($result)->toHaveCount(3);
    });

    it('returns goal difference for all seasons if seasonId is all', function () {
        $season1 = Season::factory()->create();
        $season2 = Season::factory()->create();
        $player = Player::factory()->create();
        $match1 = FootballMatch::factory()->create(['season_id' => $season1->id, 'bleu_goals' => 2, 'salmon_goals' => 1, 'lemon_goals' => 0, 'green_goals' => 0]);
        $match2 = FootballMatch::factory()->create(['season_id' => $season2->id, 'bleu_goals' => 3, 'salmon_goals' => 2, 'lemon_goals' => 0, 'green_goals' => 0]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match1->id,
                'player_id' => $player->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
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
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season2->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalDifferenceLeaderboard();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]->goal_difference)->toBe(2);
    });

    it('does not affect player goal difference when editing another player', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $match = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 4, 'salmon_goals' => 2, 'lemon_goals' => 0, 'green_goals' => 0]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
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
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalDifferenceLeaderboard();
        $result = $action($season->id);
        $aliceDiff = collect($result)->firstWhere('id', $player1->id)->goal_difference;
        // Now edit player2's match_player record to have a different team (should not affect Alice)
        DB::table('match_player')->where('player_id', $player2->id)->update(['team' => 'Lemons']);
        $result2 = $action($season->id);
        $aliceDiff2 = collect($result2)->firstWhere('id', $player1->id)->goal_difference;
        expect($aliceDiff2)->toBe($aliceDiff);
    });

    it('ignores players with no matches played', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id, 'bleu_goals' => 2, 'salmon_goals' => 1, 'lemon_goals' => 0, 'green_goals' => 0]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalDifferenceLeaderboard();
        $result = $action($season->id);
        $ids = $result->pluck('id')->all();
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });
});
