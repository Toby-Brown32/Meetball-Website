<?php

use App\Actions\Leaderboard\GetTeamGoalsForLeaderboard;
use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;
use Illuminate\Support\Facades\DB;

describe('GetTeamGoalsForLeaderboard', function () {
    beforeEach(function () {
        DB::table('match_player')->truncate();
        DB::table('matches')->truncate();
        DB::table('seasons')->truncate();
        Player::truncate();
    });

    it('can be instantiated', function () {
        $action = new GetTeamGoalsForLeaderboard();
        expect($action)->toBeInstanceOf(GetTeamGoalsForLeaderboard::class);
    });

    it('returns players ordered by team_goals_for', function () {
        $season = Season::factory()->create();
        $player1 = Player::factory()->create(['forename' => 'Alice', 'surname' => 'Smith']);
        $player2 = Player::factory()->create(['forename' => 'Bob', 'surname' => 'Jones']);
        $player3 = Player::factory()->create(['forename' => 'Charlie', 'surname' => 'Brown']);

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

        $action = new GetTeamGoalsForLeaderboard();
        $result = $action($season->id);
        expect($result)->toHaveCount(3);
        expect($result[0]->team_goals_for)->toBeGreaterThanOrEqual($result[1]->team_goals_for);
        expect($result[1]->team_goals_for)->toBeGreaterThanOrEqual($result[2]->team_goals_for);
    });

    it('returns only the top N players if limit is set', function () {
        $season = Season::factory()->create();
        $players = Player::factory()->count(5)->create();
        $match = FootballMatch::factory()->create([
            'season_id' => $season->id,
            'bleu_goals' => 2,
            'salmon_goals' => 1,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
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
        $action = new GetTeamGoalsForLeaderboard();
        $result = $action($season->id, 3);
        expect($result)->toHaveCount(3);
    });

    it('returns team_goals_for for all seasons if seasonId is all', function () {
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
            'salmon_goals' => 3,
            'lemon_goals' => 0,
            'green_goals' => 0,
        ]);
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
        $action = new GetTeamGoalsForLeaderboard();
        $result = $action('all');
        expect($result)->toHaveCount(1);
        expect($result[0]->team_goals_for)->toBe(3);
    });

    it('does not affect team_goals_for when editing another player', function () {
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
        $action = new GetTeamGoalsForLeaderboard();
        $result = $action($season->id);
        $aliceGoals = collect($result)->firstWhere('id', $player1->id)->team_goals_for;
        // Now edit player2's match_player record to have a different team (should not affect Alice)
        DB::table('match_player')->where('player_id', $player2->id)->update(['team' => 'Lemons']);
        $result2 = $action($season->id);
        $aliceGoals2 = collect($result2)->firstWhere('id', $player1->id)->team_goals_for;
        expect($aliceGoals2)->toBe($aliceGoals);
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
        $action = new GetTeamGoalsForLeaderboard();
        $result = $action($season->id);
        $ids = $result->pluck('id')->all();
        expect($ids)->toContain($player1->id);
        expect($ids)->not->toContain($player2->id);
    });
});
