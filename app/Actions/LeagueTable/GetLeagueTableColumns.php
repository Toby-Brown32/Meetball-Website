<?php

namespace App\Actions\LeagueTable;

class GetLeagueTableColumns
{
    /**
     * Returns the column config for the league table (teams or players).
     */
    public function __invoke($isPlayers = false)
    {
        if ($isPlayers) {
            return [
                [
                    'label' => 'Player',
                    'key' => 'player',
                    'align' => 'left',
                    'class' => 'font-medium',
                    'render' => function ($row) {
                        // If we have an id, render the player name as a link.
                        if (isset($row['player_id'])) {
                            $url = route('players.show', $row['player_id']);
                            $name = e($row['player']);
                            return '<a href="' . $url . '" class="text-[#EAD63D] hover:underline">' . $name . '</a>';
                        }
                        return e($row['player']);
                    }
                ],
                ['label' => 'Played', 'key' => 'played', 'align' => 'right'],
                ['label' => 'Wins', 'key' => 'wins', 'align' => 'right'],
                ['label' => 'Points', 'key' => 'points', 'align' => 'right', 'class' => 'font-bold'],
            ];
        } else {
            return [
                ['label' => 'Team', 'key' => 'team', 'align' => 'left', 'class' => 'font-medium'],
                ['label' => 'Played', 'key' => 'played', 'align' => 'right'],
                ['label' => 'Won', 'key' => 'won', 'align' => 'right'],
                // Hide some detail columns on small screens.
                ['label' => 'Drawn', 'key' => 'drawn', 'align' => 'right', 'hideBelowLg' => true],
                ['label' => 'Lost', 'key' => 'lost', 'align' => 'right', 'hideBelowLg' => true],
                ['label' => 'GF', 'key' => 'gf', 'align' => 'right', 'hideBelowLg' => true],
                ['label' => 'GA', 'key' => 'ga', 'align' => 'right', 'hideBelowLg' => true],
                ['label' => 'GD', 'key' => 'gd', 'align' => 'right'],
                ['label' => 'Points', 'key' => 'points', 'align' => 'right', 'class' => 'font-bold'],
            ];
        }
    }
}
