<?php

namespace App\Actions\Draw;

use Carbon\CarbonInterface;

class FormatWeeklyDrawOutput
{
    /**
     * @param array $teams Expected keys: A.players, B.players, reserves
     */
    public function __invoke(array $teams, CarbonInterface $nextGameDate): string
    {
        $outputDate = $nextGameDate->format('l jS F Y');

        $salmonTeam = $teams['A']['players'] ?? [];
        $lemonTeam = $teams['B']['players'] ?? [];
        $reserves = $teams['reserves'] ?? [];

        $lines = [];
        $lines[] = "Teams for {$outputDate}:";
        $lines[] = '';
        $lines[] = "Salmon's 🍣";

        foreach ($salmonTeam as $player) {
            $lines[] = trim("{$player->forename} {$player->surname}");
        }

        $lines[] = '';
        $lines[] = "Lemon's 🍋";

        foreach ($lemonTeam as $player) {
            $lines[] = trim("{$player->forename} {$player->surname}");
        }

        $lines[] = '';
        foreach ($reserves as $i => $player) {
            $lines[] = 'Res' . ($i + 1) . ': ' . trim("{$player->forename} {$player->surname}");
        }

        $lines[] = '';
        $lines[] = '18:30 Littledown pitch 5, £5 subs.';

        return implode("\n", $lines);
    }
}
