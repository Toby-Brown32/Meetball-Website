<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Player;

it('shows the weekly draw page for an admin', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.weekly_draw'));

    $response->assertStatus(200);
});

it('performs a draw with 16 selected players and returns teams structure', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $players = Player::factory()->count(20)->create();
    $selected = $players->take(16)->pluck('id')->all();

    $response = $this->post(route('admin.weekly_draw'), ['players' => $selected]);

    $response->assertStatus(200);
    $response->assertViewHas('teams');

    $data = $response->original->getData();
    $teams = $data['teams'];

    expect($teams)->toBeArray();
    expect(isset($teams['A']))->toBeTrue();
    expect(isset($teams['B']))->toBeTrue();
    expect(isset($teams['reserves']))->toBeTrue();
    expect(isset($teams['guaranteed']))->toBeTrue();

    $countA = $teams['A']['players']->count();
    $countB = $teams['B']['players']->count();
    expect($countA + $countB)->toBe(16);
});

it('draws teams when fewer than 16 players are selected', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $players = Player::factory()->count(8)->create();
    $selected = $players->take(4)->pluck('id')->all();

    $response = $this->post(route('admin.weekly_draw'), ['players' => $selected]);

    $response->assertStatus(200);
    $data = $response->original->getData();
    $teams = $data['teams'];

    $countA = $teams['A']['players']->count();
    $countB = $teams['B']['players']->count();
    expect($countA + $countB)->toBe(4);
});

it('accepts a redraw flag and still returns teams', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $players = Player::factory()->count(10)->create();
    $selected = $players->take(8)->pluck('id')->all();

    $response = $this->post(route('admin.weekly_draw'), ['players' => $selected, 'redraw' => 1]);

    $response->assertStatus(200);
    $response->assertViewHas('teams');
});
