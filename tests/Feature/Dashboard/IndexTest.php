<?php

declare(strict_types=1);

use function Pest\Laravel\get;

it('shows the public dashboard and provides season metrics', function () {
    $response = get(route('dashboard'));

    $response->assertStatus(200);
    $response->assertViewHasAll(['currentSeason', 'matchesPlayed', 'goalsScored']);
    $data = $response->original->getData();
    expect($data['currentSeason'])->toBeString();
    expect($data['matchesPlayed'])->toBeInt();
    expect($data['goalsScored'])->toBeInt();
});
