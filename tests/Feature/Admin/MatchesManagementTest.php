<?php

use App\Models\Admin;
use App\Models\FootballMatch;
use App\Models\Player;
use App\Models\Season;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;
use function Pest\Laravel\get;
use function Pest\Laravel\put;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

describe('Matches Index', function () {
    it('displays matches index page', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);

        $response = actingAs($admin, 'admin')->get(route('admin.matches.index'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.matches.index');
        $response->assertViewHas('matches');
        $response->assertViewHas('seasons');
    });

    it('filters matches by season', function () {
        $admin = Admin::factory()->create();
        $season1 = Season::factory()->create(['name' => 'Season 1']);
        $season2 = Season::factory()->create(['name' => 'Season 2']);
        $match1 = FootballMatch::factory()->create(['season_id' => $season1->id]);
        $match2 = FootballMatch::factory()->create(['season_id' => $season2->id]);

        $response = actingAs($admin, 'admin')->get(route('admin.matches.index', ['season_id' => $season1->id]));

        $response->assertStatus(200);
        $matches = $response->viewData('matches');
        expect($matches->count())->toBe(1);
        expect($matches->first()->id)->toBe($match1->id);
    });

    it('returns all seasons in view', function () {
        $admin = Admin::factory()->create();
        $season1 = Season::factory()->create();
        $season2 = Season::factory()->create();

        $response = actingAs($admin, 'admin')->get(route('admin.matches.index'));

        $seasons = $response->viewData('seasons');
        expect($seasons->count())->toBe(2);
    });

    it('orders matches by date descending', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match1 = FootballMatch::factory()->create(['season_id' => $season->id, 'match_date' => '2026-01-01']);
        $match2 = FootballMatch::factory()->create(['season_id' => $season->id, 'match_date' => '2026-01-10']);

        $response = actingAs($admin, 'admin')->get(route('admin.matches.index'));

        $matches = $response->viewData('matches');
        expect($matches->first()->id)->toBe($match2->id);
        expect($matches->last()->id)->toBe($match1->id);
    });
});

describe('Edit Match', function () {
    it('displays edit match form', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        $response = actingAs($admin, 'admin')->get(route('admin.matches.edit', $match));

        $response->assertStatus(200);
        $response->assertViewIs('admin.matches.edit');
        $response->assertViewHas('match', $match);
        $response->assertViewHas('players');
        $response->assertViewHas('matchPlayers');
    });

    it('loads existing match player data', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 2,
            'assists' => 1,
            'season_id' => $season->id,
        ]);

        $response = actingAs($admin, 'admin')->get(route('admin.matches.edit', $match));

        $matchPlayers = $response->viewData('matchPlayers');
        expect($matchPlayers->has($player->id))->toBeTrue();
    });
});

describe('Update Match', function () {
    it('updates match player stats', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        $response = actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 3,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 1,
            ],
            'players' => [
                $player->id => [
                    'team' => 'Salmons',
                    'played' => 1,
                    'goals' => 3,
                    'assists' => 2,
                ],
            ],
            'selected' => [$player->id],
        ]);

        $response->assertRedirect(route('admin.matches.index'));
        assertDatabaseHas('match_player', [
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'goals' => 3,
            'assists' => 2,
        ]);
    });

    it('sets player of match flag', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 2,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 1,
            ],
            'player_of_match_id' => $player->id,
            'players' => [
                $player->id => [
                    'team' => 'Salmons',
                    'played' => 1,
                ],
            ],
            'selected' => [$player->id],
        ]);

        assertDatabaseHas('match_player', [
            'match_id' => $match->id,
            'player_id' => $player->id,
            'player_of_match' => 1,
        ]);
    });

    it('increments missed_games when marked as reserve', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create(['missed_games' => 0]);

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 1,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 0,
            ],
            'players' => [
                $player->id => [
                    'team' => 'Salmons',
                    'reserve' => 1,
                ],
            ],
            'selected' => [$player->id],
        ]);

        assertDatabaseHas('players', [
            'id' => $player->id,
            'missed_games' => 1,
        ]);
    });

    it('does not increment missed_games when marked as played', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create(['missed_games' => 0]);

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 1,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 0,
            ],
            'players' => [
                $player->id => [
                    'team' => 'Salmons',
                    'played' => 1,
                    'reserve' => 1,
                ],
            ],
            'selected' => [$player->id],
        ]);

        assertDatabaseHas('players', [
            'id' => $player->id,
            'missed_games' => 0,
        ]);
    });

    it('removes players not in selected list', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player1 = Player::factory()->create();
        $player2 = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player1->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
        ]);
        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player2->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
        ]);

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 1,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 0,
            ],
            'players' => [
                $player1->id => [
                    'team' => 'Salmons',
                    'played' => 1,
                ],
            ],
            'selected' => [$player1->id],
        ]);

        assertDatabaseHas('match_player', [
            'match_id' => $match->id,
            'player_id' => $player1->id,
        ]);
        assertDatabaseMissing('match_player', [
            'match_id' => $match->id,
            'player_id' => $player2->id,
        ]);
    });

    it('handles empty selected players', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
        ]);

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 1,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 0,
            ],
            'players' => [],
            'selected' => [],
        ]);

        assertDatabaseMissing('match_player', [
            'match_id' => $match->id,
            'player_id' => $player->id,
        ]);
    });

    it('updates existing match player record', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        \DB::table('match_player')->insert([
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Les Bleus',
            'played' => 0,
            'reserve' => 0,
            'goals' => 0,
            'assists' => 0,
            'season_id' => $season->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 2,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 1,
            ],
            'players' => [
                $player->id => [
                    'team' => 'Salmons',
                    'played' => 1,
                    'goals' => 2,
                    'assists' => 1,
                ],
            ],
            'selected' => [$player->id],
        ]);

        assertDatabaseHas('match_player', [
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => 'Salmons',
            'played' => 1,
            'goals' => 2,
            'assists' => 1,
        ]);
    });

    it('stores season_id in match_player', function () {
        $admin = Admin::factory()->create();
        $season = Season::factory()->create();
        $match = FootballMatch::factory()->create(['season_id' => $season->id]);
        $player = Player::factory()->create();

        actingAs($admin, 'admin')->put(route('admin.matches.update', $match), [
            'score' => [
                'salmon_goals' => 1,
                'opponent' => 'Les Bleus',
                'opponent_goals' => 0,
            ],
            'players' => [
                $player->id => [
                    'team' => 'Salmons',
                    'played' => 1,
                ],
            ],
            'selected' => [$player->id],
        ]);

        assertDatabaseHas('match_player', [
            'match_id' => $match->id,
            'player_id' => $player->id,
            'season_id' => $season->id,
        ]);
    });
});
