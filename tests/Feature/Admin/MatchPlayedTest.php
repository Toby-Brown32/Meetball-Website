<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Season;
use App\Models\FootballMatch;

it('shows the match played page for an admin', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.match_played'));

    $response->assertStatus(200);
});

it('stores a new match with valid data', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $season = Season::factory()->create();

    $post = [
        'season_id' => $season->id,
        'match_date' => now()->toDateString(),
        'salmon_goals' => 1,
        'bleu_goals' => 2,
        'lemon_goals' => 0,
        'green_goals' => 0,
        'player_of_match_id' => null,
    ];

    $response = $this->post(route('admin.match_played.store'), $post);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('matches', [
        'season_id' => $season->id,
        'bleu_goals' => 2,
    ]);
});

it('returns validation errors for missing required fields', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    // missing season_id and match_date
    $post = [
        'salmon_goals' => 1,
    ];

    $response = $this->post(route('admin.match_played.store'), $post);

    $response->assertSessionHasErrors(['season_id', 'match_date']);
});
