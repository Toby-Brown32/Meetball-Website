<?php

use App\Actions\Leaderboard\GetMatchesPlayedLeaderboard;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('GetMatchesPlayedLeaderboard', function () {
    beforeEach(function () {
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
        Player::truncate();
    });

    it('can be instantiated', function () {
        $action = new GetMatchesPlayedLeaderboard();
        expect($action)->toBeInstanceOf(GetMatchesPlayedLeaderboard::class);
    });

    it('returns players ordered by matches played', function () {
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

        $action = new GetMatchesPlayedLeaderboard();
        $result = $action($season->id);
        expect($result)->toHaveCount(3);
        expect($result[0]->played)->toBeGreaterThanOrEqual($result[1]->played);
        expect($result[1]->played)->toBeGreaterThanOrEqual($result[2]->played);
    });

    it('returns only the top N players if limit is set', function () {
        $season = Season::factory()->create();
        $players = Player::factory()->count(5)->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
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
        $action = new GetMatchesPlayedLeaderboard();
        $result = $action($season->id, 3);
        expect($result)->toHaveCount(3);
    });

    it('returns matches played for all seasons if seasonId is all', function () {
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
        $action = new GetMatchesPlayedLeaderboard();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]->played)->toBe(2);
    });

    it('does not affect player matches played when editing another player', function () {
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
        $action = new GetMatchesPlayedLeaderboard();
        $result = $action($season->id);
        $alicePlayed = collect($result)->firstWhere('id', $player1->id)->played;
        // Now edit player2's match_player record to have more matches (should not affect Alice)
        DB::table('match_player')->where('player_id', $player2->id)->update(['played' => 10]);
        $result2 = $action($season->id);
        $alicePlayed2 = collect($result2)->firstWhere('id', $player1->id)->played;
        expect($alicePlayed2)->toBe($alicePlayed);
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
                'goals' => 0,
                'assists' => 0,
                'season_id' => $season->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        $action = new GetMatchesPlayedLeaderboard();
        $result = $action($season->id);
        $ids = $result->pluck('id')->all();
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });
});
