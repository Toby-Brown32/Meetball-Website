<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Season;
use App\Models\FootballMatch;
use App\Models\Player;

it('stores a match with valid data', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $season = Season::factory()->create();
    $post = [
        'season_id' => $season->id,
        'match_date' => now()->toDateString(),
        'bleu_goals' => 2,
        'salmon_goals' => 1,
        'lemon_goals' => null,
        'green_goals' => null,
        'player_of_match_id' => null,
    ];

    $response = $this->post(route('admin.match_played.store'), $post);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('matches', [
        'season_id' => $season->id,
        'bleu_goals' => 2,
        'salmon_goals' => 1,
    ]);
});

it('validates required fields and date format', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $response = $this->post(route('admin.match_played.store'), [
        // missing season_id and match_date
        'bleu_goals' => 1,
    ]);

    $response->assertSessionHasErrors(['season_id', 'match_date']);
});

it('validates player_of_match exists when provided', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $season = Season::factory()->create();

    $response = $this->post(route('admin.match_played.store'), [
        'season_id' => $season->id,
        'match_date' => now()->toDateString(),
        'player_of_match_id' => 999999, // nonexistent
    ]);

    $response->assertSessionHasErrors(['player_of_match_id']);
});

it('accepts a valid player_of_match id', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $season = Season::factory()->create();
    $player = Player::factory()->create();

    $response = $this->post(route('admin.match_played.store'), [
        'season_id' => $season->id,
        'match_date' => now()->toDateString(),
        'player_of_match_id' => $player->id,
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('matches', [
        'season_id' => $season->id,
        'player_of_match_id' => $player->id,
    ]);
});
