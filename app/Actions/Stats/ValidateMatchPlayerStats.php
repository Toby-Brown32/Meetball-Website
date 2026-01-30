<?php

namespace App\Actions\Stats;

class ValidateMatchPlayerStats
{
    /**
     * Validates match player input (played/reserve flags and team selection).
     *
     * @param array $players
     * @return array [inputErrors, valid]
     */
    public function __invoke(array $players, array $selected): array
    {
        $inputErrors = [];
        foreach ($selected as $playerId) {
            $data = $players[$playerId] ?? [];
            $played = !empty($data['played']);
            $reserve = !empty($data['reserve']);

            // Each selected player must be either played OR reserve (not both).
            if ($played && $reserve) {
                $inputErrors['players.' . $playerId . '.played'] = 'A player cannot be both played and reserve.';
            } elseif (!$played && !$reserve) {
                $inputErrors[
                    'players.' . $playerId . '.played'
                    ] = 'A player must be marked as either played or reserve.';
            }

            // Team is only required when the player actually played.
            if ($played && empty($data['team'])) {
                $inputErrors['players.' . $playerId . '.team'] = 'Team is required for played players.';
            }
        }
        return [$inputErrors, empty($inputErrors)];
    }
}
