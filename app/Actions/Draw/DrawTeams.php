<?php

namespace App\Actions\Draw;

use Illuminate\Support\Collection;

class DrawTeams
{
    /**
     * Shuffle/split players into two teams, trying to balance total player_level.
     * Returns the last attempt if no split meets the tolerance.
     */
    public function __invoke(Collection $drawn, int $maxTries = 1000): array
    {
        $count = $drawn->count();
        // Split into two halves (Team A gets the extra player if odd).
        $half = (int) ceil($count / 2);

        $shuffled = $drawn->values();
        $teamA = $shuffled->slice(0, $half);
        $teamB = $shuffled->slice($half);
        $sumA = $teamA->sum('player_level');
        $sumB = $teamB->sum('player_level');

        // Keep shuffling/splitting until we find a reasonably balanced match-up.
        for ($i = 0; $i < $maxTries; $i++) {
            $shuffled = $drawn->shuffle()->values();
            $teamA = $shuffled->slice(0, $half);
            $teamB = $shuffled->slice($half);
            $sumA = $teamA->sum('player_level');
            $sumB = $teamB->sum('player_level');

            // Accept when total level difference is within tolerance.
            if (abs($sumA - $sumB) <= 5) {
                return [
                    'A' => ['players' => $teamA, 'level' => $sumA],
                    'B' => ['players' => $teamB, 'level' => $sumB],
                ];
            }
        }

        return [
            'A' => ['players' => $teamA, 'level' => $sumA],
            'B' => ['players' => $teamB, 'level' => $sumB],
        ];
    }
}
