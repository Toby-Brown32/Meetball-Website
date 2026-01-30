<?php

declare(strict_types=1);

use App\Models\Season;

it('can create a season via factory', function () {
    $season = Season::factory()->create(['name' => 'Test Season']);

    expect($season)->toBeInstanceOf(Season::class)
        ->and($season->id)->not->toBeNull()
        ->and($season->name)->toBe('Test Season');
});
