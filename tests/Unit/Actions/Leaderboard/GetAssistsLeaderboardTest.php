<?php

use App\Actions\Leaderboard\GetAssistsLeaderboard;
use App\Models\Player;
use App\Models\Season;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;

describe('GetAssistsLeaderboard', function () {
    beforeEach(function () {
        // Optionally clear tables if needed
        DB::table('match_player')->truncate();
        Player::truncate();
        Season::truncate();
    });

    it('returns players ordered by assists', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $player3 = Player::factory()->create(['forename' => 'Charlie', 'surname' => 'Brown']);

        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'assists' => 5,
                'season_id' => $season->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match->id,
                'player_id' => $player2->id,
                'assists' => 7,
                'season_id' => $season->id,
                'team' => 'Salmons',
                'played' => true,
                'reserve' => false,
                'goals' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match->id,
                'player_id' => $player3->id,
                'assists' => 3,
                'season_id' => $season->id,
                'team' => 'Lemons',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $action = new GetAssistsLeaderboard();
        $result = $action($season->id);
        expect($result)->toHaveCount(3);
        expect($result[0]->id)->toBe($player2->id);
        expect($result[1]->id)->toBe($player1->id);
        expect($result[2]->id)->toBe($player3->id);
    });

    it('returns only the top N players if limit is set', function () {
        $season = Season::factory()->create();
        $players = Player::factory()->count(5)->create();
        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        foreach ($players as $i => $player) {
            DB::table('match_player')->insert([
                'match_id' => $match->id,
                'player_id' => $player->id,
                'assists' => 10 - $i,
                'season_id' => $season->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $action = new GetAssistsLeaderboard();
        $result = $action($season->id, 3);
        expect($result)->toHaveCount(3);
        expect($result[0]->assists)->toBeGreaterThanOrEqual($result[1]->assists);
        expect($result[1]->assists)->toBeGreaterThanOrEqual($result[2]->assists);
    });

    it('returns assists for all seasons if seasonId is all', function () {
        $season1 = Season::factory()->create();
        $season2 = Season::factory()->create();
        $player = Player::factory()->create();
        $match1 = \App\Models\FootballMatch::factory()->create(['season_id' => $season1->id]);
        $match2 = \App\Models\FootballMatch::factory()->create(['season_id' => $season2->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match1->id,
                'player_id' => $player->id,
                'assists' => 2,
                'season_id' => $season1->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match2->id,
                'player_id' => $player->id,
                'assists' => 3,
                'season_id' => $season2->id,
                'team' => 'Salmons',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetAssistsLeaderboard();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]->assists)->toBe(5);
    });

    it('does not affect player assists when editing another player', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'assists' => 5,
                'season_id' => $season->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'match_id' => $match->id,
                'player_id' => $player2->id,
                'assists' => 2,
                'season_id' => $season->id,
                'team' => 'Salmons',
                'played' => true,
                'reserve' => false,
                'goals' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetAssistsLeaderboard();
        $result = $action($season->id);
        $aliceAssists = collect($result)->firstWhere('id', $player1->id)->assists;
        // Now edit player2's match_player record to have more assists (should not affect Alice)
        DB::table('match_player')->where('player_id', $player2->id)->update(['assists' => 10]);
        $result2 = $action($season->id);
        $aliceAssists2 = collect($result2)->firstWhere('id', $player1->id)->assists;
        expect($aliceAssists2)->toBe($aliceAssists);
    });

    it('ignores players with no matches played', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();
        $match = \App\Models\FootballMatch::factory()->create(['season_id' => $season->id]);
        DB::table('match_player')->insert([
            [
                'match_id' => $match->id,
                'player_id' => $player1->id,
                'assists' => 2,
                'season_id' => $season->id,
                'team' => 'Les Bleus',
                'played' => true,
                'reserve' => false,
                'goals' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetAssistsLeaderboard();
        $result = $action($season->id);
        $ids = $result->pluck('id')->all();
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });
});
