<?php
// Enable Laravel container for Pest


use App\Actions\Leaderboard\GetGoalInvolvementsLeaderboard;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('GetGoalInvolvementsLeaderboard', function () {
    beforeEach(function () {
        // Truncate in order: match_player, matches, then seasons to avoid FK constraint errors
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
        Player::truncate();
    });

    it('can be instantiated', function () {
        $action = new GetGoalInvolvementsLeaderboard();
        expect($action)->toBeInstanceOf(GetGoalInvolvementsLeaderboard::class);
    });

    it('returns players ordered by goal involvements', function () {
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
                'goals' => 1,
                'assists' => 2,
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

        $action = new GetGoalInvolvementsLeaderboard();
        $result = $action($season->id);
        expect($result)->toHaveCount(3);
        expect($result[0]->goal_involvements)->toBeGreaterThanOrEqual($result[1]->goal_involvements);
        expect($result[1]->goal_involvements)->toBeGreaterThanOrEqual($result[2]->goal_involvements);
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
                'goals' => $i,
                'assists' => 5 - $i,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $action = new GetGoalInvolvementsLeaderboard();
        $result = $action($season->id, 3);
        expect($result)->toHaveCount(3);
    });

    it('returns goal involvements for all seasons if seasonId is all', function () {
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
                'goals' => 1,
                'assists' => 2,
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
                'goals' => 2,
                'assists' => 1,
                'season_id' => $season2->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalInvolvementsLeaderboard();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]->goal_involvements)->toBe(6);
    });

    it('does not affect player goal involvements when editing another player', function () {
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
                'goals' => 2,
                'assists' => 1,
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
                'goals' => 1,
                'assists' => 2,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalInvolvementsLeaderboard();
        $result = $action($season->id);
        $aliceInvolvements = collect($result)->firstWhere('id', $player1->id)->goal_involvements;
        // Now edit player2's match_player record to have different stats (should not affect Alice)
        DB::table('match_player')->where('player_id', $player2->id)->update(['goals' => 10, 'assists' => 10]);
        $result2 = $action($season->id);
        $aliceInvolvements2 = collect($result2)->firstWhere('id', $player1->id)->goal_involvements;
        expect($aliceInvolvements2)->toBe($aliceInvolvements);
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
                'goals' => 1,
                'assists' => 1,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetGoalInvolvementsLeaderboard();
        $result = $action($season->id);
        $ids = $result->pluck('id')->all();
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });
});
