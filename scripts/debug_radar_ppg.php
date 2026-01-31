<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$getStats = new App\Actions\Player\GetPlayerStats();
$getMax = new App\Actions\Player\GetRadarMaxStats();

$seasonIds = App\Models\Season::orderBy('id')->pluck('id')->all();
$players = App\Models\Player::orderBy('id')->get(['id', 'forename', 'surname']);

foreach ($seasonIds as $seasonId) {
    $maxStats = $getMax($seasonId);
    $maxPpg = $maxStats['points_per_game'] ?? null;

    $bestPpg = null;
    $bestPlayer = null;

    $perfects = [];

    foreach ($players as $player) {
        $stats = $getStats($player, $seasonId);
        $played = (int) ($stats['matches_played'] ?? 0);
        if ($played <= 0) {
            continue;
        }

        $ppg = (float) ($stats['points_per_game'] ?? 0);

        if ($bestPpg === null || $ppg > $bestPpg) {
            $bestPpg = $ppg;
            $bestPlayer = $player;
        }

        if (abs($ppg - 3.0) < 0.00001) {
            $perfects[] = [$player, $played, (int) ($stats['points'] ?? 0)];
        }
    }

    $bestName = $bestPlayer ? ($bestPlayer->id . ' ' . $bestPlayer->forename . ' ' . $bestPlayer->surname) : '-';

    echo "Season {$seasonId}: maxStats_ppg={$maxPpg} bestStats_ppg={$bestPpg} bestPlayer={$bestName}\n";

    if ($maxPpg !== null && $bestPpg !== null && abs((float) $maxPpg - (float) $bestPpg) > 0.001) {
        echo "  MISMATCH! perfect-ppg players=" . count($perfects) . "\n";
        foreach (array_slice($perfects, 0, 5) as [$p, $played, $points]) {
            echo "    - {$p->id} {$p->forename} {$p->surname} played={$played} points={$points}\n";
        }
    }
}
