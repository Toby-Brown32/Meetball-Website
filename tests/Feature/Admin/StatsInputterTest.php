<?php

use App\Models\Player;
use App\Models\Season;
use App\Models\FootballMatch;

use function Pest\Laravel\post;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

it('submits valid played/goals', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create();

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player->id => [
                'team' => 'Les Bleus',
                'played' => 1,
                'goals' => 2,
                'assists' => 1,
            ],
        ],
        'selected' => [$player->id],
    ]);

    $response->assertSessionHasNoErrors();
    assertDatabaseHas('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
        'played' => 1,
        'goals' => 2,
        'assists' => 1,
    ]);
});

it('submits reserve and increments missed_games', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create(['missed_games' => 0]);

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player->id => [
                'team' => 'Salmons',
                'reserve' => 1,
            ],
        ],
        'selected' => [$player->id],
    ]);

    $response->assertSessionHasNoErrors();
    assertDatabaseHas('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
        'reserve' => 1,
    ]);
    assertDatabaseHas('players', [
        'id' => $player->id,
        'missed_games' => 1,
    ]);
});

it('requires team', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create();

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player->id => [
                'played' => 1,
            ],
        ],
        'selected' => [$player->id],
    ]);

    $response->assertSessionHasErrors(['players.' . $player->id . '.team']);
    assertDatabaseMissing('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
    ]);
});

it('requires played or reserve', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create();

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player->id => [
                'team' => 'Lemons',
            ],
        ],
        'selected' => [$player->id],
    ]);

    $response->assertSessionHasErrors(['players.' . $player->id . '.played']);
    assertDatabaseMissing('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
    ]);
});

it('rejects both played and reserve', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create();

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player->id => [
                'team' => 'Greens',
                'played' => 1,
                'reserve' => 1,
            ],
        ],
        'selected' => [$player->id],
    ]);

    $response->assertSessionHasErrors(['players.' . $player->id . '.played']);
    assertDatabaseMissing('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
    ]);
});

it('does nothing on empty submission', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        // 'players' and 'selected' omitted to trigger validation errors
    ]);

    $response->assertSessionHasErrors(['players', 'selected']);
});

it('submits multiple players', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player1 = Player::factory()->create();
    $player2 = Player::factory()->create();

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player1->id => [
                'team' => 'Les Bleus',
                'played' => 1,
                'goals' => 1,
            ],
            $player2->id => [
                'team' => 'Salmons',
                'reserve' => 1,
            ],
        ],
        'selected' => [$player1->id, $player2->id],
    ]);

    $response->assertSessionHasNoErrors();
    assertDatabaseHas('match_player', [
        'match_id' => $match->id,
        'player_id' => $player1->id,
        'played' => 1,
    ]);
    assertDatabaseHas('match_player', [
        'match_id' => $match->id,
        'player_id' => $player2->id,
        'reserve' => 1,
    ]);
});

it('submits 16 players with mixed data', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $players = Player::factory()->count(16)->create();

    $payloadPlayers = [];
    $selected = [];
    $teams = ['Les Bleus', 'Salmons', 'Lemons', 'Greens'];
    foreach ($players as $i => $player) {
        $selected[] = $player->id;
        $data = [
            'team' => $teams[$i % 4],
        ];
        // Alternate played/reserve, add goals/assists/motm for some
        if ($i % 2 === 0) {
            $data['played'] = 1;
            $data['goals'] = $i % 3; // 0,1,2
            $data['assists'] = $i % 2; // 0,1
            if ($i === 0 || $i === 8) {
                $data['player_of_match'] = 1;
            }
        } else {
            $data['reserve'] = 1;
        }
        $payloadPlayers[$player->id] = $data;
    }

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => $payloadPlayers,
        'selected' => $selected,
    ]);

    $response->assertSessionHasNoErrors();
    foreach ($players as $i => $player) {
        $row = [
            'match_id' => $match->id,
            'player_id' => $player->id,
            'team' => $teams[$i % 4],
        ];
        if ($i % 2 === 0) {
            $row['played'] = 1;
            $row['goals'] = $i % 3;
            $row['assists'] = $i % 2;
            $row['player_of_match'] = ($i === 0 || $i === 8) ? 1 : 0;
        } else {
            $row['reserve'] = 1;
        }
        assertDatabaseHas('match_player', $row);
    }
});

it('updates an existing match_player row instead of duplicating', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create();

    // insert initial row
    \DB::table('match_player')->insert([
        'match_id' => $match->id,
        'player_id' => $player->id,
        'team' => 'Les Bleus',
        'played' => 1,
        'reserve' => 0,
        'goals' => 0,
        'assists' => 0,
        'season_id' => $season->id,
        'player_of_match' => 0,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $this->actingAs($admin, 'admin');
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        'players' => [
            $player->id => [
                'team' => 'Les Bleus',
                'played' => 1,
                'goals' => 2,
                'assists' => 1,
            ],
        ],
        'selected' => [$player->id],
    ]);

    $response->assertSessionHasNoErrors();
    // ensure the row was updated
    assertDatabaseHas('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
        'goals' => 2,
        'assists' => 1,
    ]);
    // ensure only one row exists for that match/player
    $count = \DB::table('match_player')->where('match_id', $match->id)->where('player_id', $player->id)->count();
    expect($count)->toBe(1);
});

it('returns error when selected includes id not present in players array', function () {
    $admin = \App\Models\Admin::factory()->create();
    $season = Season::factory()->create();
    $match = FootballMatch::factory()->create(['season_id' => $season->id]);
    $player = Player::factory()->create();

    $this->actingAs($admin, 'admin');
    // selected contains player id but players array omits it
    $response = post(route('admin.stats_inputter.store'), [
        'match_id' => $match->id,
        // provide a non-empty players array that does not include the selected id
        'players' => [99999 => []],
        'selected' => [$player->id],
    ]);

    // ValidateMatchPlayerStats will mark as missing played/reserve and return nested errors
    $response->assertSessionHasErrors(['players.' . $player->id . '.played']);
    assertDatabaseMissing('match_player', [
        'match_id' => $match->id,
        'player_id' => $player->id,
    ]);
});
