<?php

namespace App\Actions\Player;

class CalculatePlayerSpecialStats
{
    /**
     * Calculates "special" stats like clean sheets, hattricks, braces, and POTM.
     */
    public function __invoke($matchPlayers, $matches, $player)
    {
        $teamColumns = [
            'Les Bleus' => 'bleu_goals',
            'Salmons' => 'salmon_goals',
            'Lemons' => 'lemon_goals',
            'Greens' => 'green_goals',
        ];
        $uniqueMatches = $matchPlayers->unique('match_id');
        $cleanSheets = 0;
        $hattricks = 0;
        $braces = 0;
        $playerOfMatch = 0;
        foreach ($uniqueMatches as $mp) {
            $match = $matches[$mp->match_id] ?? null;
            if (!$match) {
                continue;
            }
            $teamCol = $teamColumns[$mp->team] ?? null;
            $oppCol = null;

            // Clean sheets are currently determined using the opponent's goals column.
            if ($mp->team === 'Salmons') {
                $oppCol = isset($match->bleu_goals)
                    ? 'bleu_goals'
                    : (isset($match->lemon_goals)
                        ? 'lemon_goals'
                        : null
                    );
            } elseif ($mp->team === 'Les Bleus') {
                $oppCol = isset($match->salmon_goals) ? 'salmon_goals' : null;
            }
            if ($teamCol && $oppCol && ($match->$oppCol ?? null) === 0) {
                $cleanSheets++;
            }
            $goalsInMatch = $matchPlayers
                ->where('match_id', $mp->match_id)
                ->where('player_id', $player->id)
                ->sum('goals');
            if ($goalsInMatch >= 3) {
                $hattricks++;
            } elseif ($goalsInMatch == 2) {
                $braces++;
            }
            if (($match->player_of_match_id ?? null) == $player->id) {
                $playerOfMatch++;
            }
        }
        return [
            'clean_sheets' => $cleanSheets,
            'hattricks' => $hattricks,
            'braces' => $braces,
            'player_of_match' => $playerOfMatch,
        ];
    }
}
