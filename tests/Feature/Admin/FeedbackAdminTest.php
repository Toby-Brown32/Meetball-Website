<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Feedback;

it('does not allow access to the feedback index page', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    Feedback::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'feedback' => 'Hello from the test suite',
    ]);

    $response = $this->get('/admin/feedback');

    $response->assertStatus(404);
});

it('does not allow access to a single feedback item page', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $feedback = Feedback::create([
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'feedback' => "Line one\nLine two",
    ]);

    $response = $this->get('/admin/feedback/' . $feedback->id);

    $response->assertStatus(404);
});
