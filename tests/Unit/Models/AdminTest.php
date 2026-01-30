<?php

declare(strict_types=1);

use App\Models\Admin;

it('can create an admin via factory', function () {
    $admin = Admin::factory()->create();

    expect($admin)->toBeInstanceOf(Admin::class)
        ->and($admin->id)->not->toBeNull();
});
