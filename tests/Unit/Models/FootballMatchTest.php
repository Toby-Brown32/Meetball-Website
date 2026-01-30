<?php

declare(strict_types=1);

use App\Models\FootballMatch;

it('can create a football match via factory', function () {
    $match = FootballMatch::factory()->create(['bleu_goals' => 1, 'salmon_goals' => 0]);

    expect($match)->toBeInstanceOf(FootballMatch::class)
        ->and($match->id)->not->toBeNull()
        ->and($match->bleu_goals)->toBe(1);
});
