<?php

declare(strict_types=1);

use App\Models\User;

it('can create a user via factory', function () {
    $user = User::factory()->create(['email' => 'test@example.com']);

    expect($user)->toBeInstanceOf(User::class)
        ->and($user->id)->not->toBeNull()
        ->and($user->email)->toBe('test@example.com');
});
