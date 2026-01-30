<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Season;

it('shows the new season page for an admin', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $response = $this->get(route('admin.new_season'));

    $response->assertStatus(200);
});

it('creates a new season with valid data', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $post = [
        'name' => '2026 Test Season',
        'start_date' => now()->toDateString(),
        'end_date' => now()->addDays(30)->toDateString(),
    ];

    $response = $this->post(route('admin.new_season.create'), $post);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('seasons', [
        'name' => '2026 Test Season',
    ]);
});

it('returns validation errors for missing or invalid fields', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    // missing end_date and invalid start_date
    $post = [
        'name' => '',
        'start_date' => 'invalid-date',
    ];

    $response = $this->post(route('admin.new_season.create'), $post);

    $response->assertSessionHasErrors(['name', 'start_date', 'end_date']);
});
