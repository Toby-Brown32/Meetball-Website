<?php

declare(strict_types=1);

use App\Models\Player;

it('can create a player via factory', function () {
    $player = Player::factory()->create();

    expect($player)->toBeInstanceOf(Player::class)
        ->and($player->id)->not->toBeNull();
});
