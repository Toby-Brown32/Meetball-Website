<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\FootballMatch;
use App\Models\Player;

it('redirects guests to the admin login for players index', function () {
    $response = $this->get(route('admin.players.index'));

    $response->assertRedirect('/login');
});

it('shows the admin players index page for an admin', function () {
    $admin = Admin::factory()->create();
    $players = Player::factory()->count(2)->create([
        'player_level' => 3,
        'nickname' => null,
    ]);

    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.players.index'));

    $response->assertStatus(200);
    $response->assertSeeText($players[0]->surname);
    $response->assertSeeText($players[1]->surname);
});

it('shows the admin create player page for an admin', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.players.create'));

    $response->assertStatus(200);
    $response->assertSeeText('Add New Player');
});

it('stores a new player and redirects to the players index', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $post = [
        'forename' => 'John',
        'surname' => 'Doe',
        'nickname' => '',
        'player_level' => 4,
    ];

    $response = $this->post(route('admin.players.store'), $post);

    $response->assertRedirect(route('admin.players.index'));
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('players', [
        'forename' => 'John',
        'surname' => 'Doe',
        'nickname' => null,
        'player_level' => 4,
    ]);
});

it('validates store player request', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $post = [
        'forename' => 'Jane',
        // missing surname
        'player_level' => 2,
    ];

    $response = $this->post(route('admin.players.store'), $post);

    $response->assertSessionHasErrors(['surname']);

    $this->assertDatabaseMissing('players', [
        'forename' => 'Jane',
    ]);
});

it('shows the admin edit player page for an admin', function () {
    $admin = Admin::factory()->create();
    $player = Player::factory()->create([
        'forename' => 'Sam',
        'surname' => 'Smith',
        'player_level' => 3,
    ]);

    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.players.edit', $player));

    $response->assertStatus(200);
    $response->assertSeeText('Edit Player');
    $response->assertSee('value="Sam"', false);
    $response->assertSee('value="Smith"', false);
});

it('updates a player and redirects to the players index', function () {
    $admin = Admin::factory()->create();
    $player = Player::factory()->create([
        'forename' => 'Old',
        'surname' => 'Name',
        'nickname' => null,
        'player_level' => 2,
    ]);

    $this->actingAs($admin, 'admin');

    $payload = [
        'forename' => 'New',
        'surname' => 'Name',
        'nickname' => 'NN',
        'player_level' => 6,
    ];

    $response = $this->put(route('admin.players.update', $player), $payload);

    $response->assertRedirect(route('admin.players.index'));
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('players', [
        'id' => $player->id,
        'forename' => 'New',
        'surname' => 'Name',
        'nickname' => 'NN',
        'player_level' => 6,
    ]);
});

it('validates update player request', function () {
    $admin = Admin::factory()->create();
    $player = Player::factory()->create([
        'player_level' => 2,
    ]);

    $this->actingAs($admin, 'admin');

    $payload = [
        'forename' => $player->forename,
        'surname' => $player->surname,
        'nickname' => $player->nickname,
        'player_level' => 99,
    ];

    $response = $this->put(route('admin.players.update', $player), $payload);

    $response->assertSessionHasErrors(['player_level']);

    $this->assertDatabaseHas('players', [
        'id' => $player->id,
        'player_level' => 2,
    ]);
});

it('deletes a player without match history', function () {
    $admin = Admin::factory()->create();
    $player = Player::factory()->create([
        'player_level' => 3,
    ]);

    $this->actingAs($admin, 'admin');

    $response = $this->delete(route('admin.players.destroy', $player));

    $response->assertRedirect(route('admin.players.index'));
    $response->assertSessionHas('success');

    $this->assertDatabaseMissing('players', [
        'id' => $player->id,
    ]);
});

it('prevents deleting a player with match history', function () {
    $admin = Admin::factory()->create();
    $player = Player::factory()->create([
        'player_level' => 3,
    ]);

    $match = FootballMatch::factory()->create();

    $match->players()->attach($player->id, [
        'season_id' => $match->season_id,
        'team' => null,
        'played' => true,
        'reserve' => false,
        'goals' => 0,
        'assists' => 0,
        'player_of_match' => false,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $this->actingAs($admin, 'admin');

    $response = $this->delete(route('admin.players.destroy', $player));

    $response->assertRedirect();
    $response->assertSessionHas('error');

    $this->assertDatabaseHas('players', [
        'id' => $player->id,
    ]);
});
