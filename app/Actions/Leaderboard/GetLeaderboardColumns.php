<?php

namespace App\Actions\Leaderboard;

class GetLeaderboardColumns
{
    /**
     * Defines the table columns for a given leaderboard stat.
     */
    public function __invoke(string $stat): array
    {
        $columns = [
            [
                'label' => '#',
                'key' => 'rank',
                'align' => 'left',
                'class' => 'font-semibold text-blue-300',
                'render' => function ($row, $i) {
                    return $i + 1;
                }
            ],
            [
                'label' => 'Name',
                'key' => 'name',
                'align' => 'left',
                'class' => 'font-medium',
                'render' => function ($row) {
                    // Render as a link to the player's profile.
                    $url = route('players.show', $row->id);
                    $name = e($row->forename . ' ' . $row->surname);
                    return '<a href="' . $url . '" class="text-[#EAD63D] hover:underline">' . $name . '</a>';
                }
            ],
        ];

        // Stat-specific columns.
        if ($stat === 'matches_played') {
            $columns[] = [
                'label' => 'Matches Played',
                'key' => 'played',
                'align' => 'right',
                'class' => 'font-bold text-blue-200'
            ];
            $columns[] = [
                'label' => 'Played %',
                'key' => 'played_pct',
                'align' => 'right',
                'class' => 'text-gray-300',
                'render' => function ($row) {
                    return $row->played_pct . '%';
                }
            ];
        } else {
            $columns[] = [
                'label' => ucfirst(str_replace('_', ' ', $stat)),
                'key' => $stat,
                'align' => 'right',
                'class' => 'font-bold'
            ];
        }
        return $columns;
    }
}
