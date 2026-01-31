<?php

declare(strict_types=1);

use App\Models\Admin;
use App\Models\Feedback;

it('shows the feedback index page for an admin', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    Feedback::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'feedback' => 'Hello from the test suite',
    ]);

    $response = $this->get(route('admin.feedback.index'));

    $response->assertStatus(200);
    $response->assertSee('Feedback');
    $response->assertSee('Hello from the test suite');
});

it('shows a single feedback item for an admin', function () {
    $admin = Admin::factory()->create();
    $this->actingAs($admin, 'admin');

    $feedback = Feedback::create([
        'name' => 'Jane Doe',
        'email' => 'jane@example.com',
        'feedback' => "Line one\nLine two",
    ]);

    $response = $this->get(route('admin.feedback.show', $feedback));

    $response->assertStatus(200);
    $response->assertSee('Feedback Details');
    $response->assertSee('Jane Doe');
    $response->assertSee('jane@example.com');
    $response->assertSee('Line one');
    $response->assertSee('Line two');
});
