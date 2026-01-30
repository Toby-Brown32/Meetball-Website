<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Player;

it('shows the add players page for an admin', function () {
    $admin = Admin::factory()->create();

    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.add_players'));

    $response->assertStatus(200);
});

it('stores a new player with valid data', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $post = [
        'forename' => 'John',
        'surname' => 'Doe',
        'nickname' => 'JD',
        'player_level' => 3,
    ];

    $response = $this->post(route('admin.add_players.store'), $post);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('players', [
        'forename' => 'John',
        'surname' => 'Doe',
    ]);
});

it('returns validation errors for missing fields', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $post = [
        'forename' => 'Jane',
        // missing surname
        'player_level' => 2,
    ];

    $response = $this->post(route('admin.add_players.store'), $post);

    $response->assertSessionHasErrors(['surname']);

    $this->assertDatabaseMissing('players', [
        'forename' => 'Jane',
    ]);
});
