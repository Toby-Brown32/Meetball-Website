<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\MatchPlayer>
 */
class MatchPlayerFactory extends Factory
{
    protected $model = \App\Models\MatchPlayer::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'match_id' => \App\Models\FootballMatch::factory(),
            'player_id' => \App\Models\Player::factory(),
            'team' => $this->faker->randomElement(['Les Bleus', 'Salmons', 'Lemons', 'Greens']),
            'played' => $this->faker->boolean(90),
            'reserve' => $this->faker->boolean(10),
            'goals' => $this->faker->numberBetween(0, 5),
            'assists' => $this->faker->numberBetween(0, 5),
            'season_id' => \App\Models\Season::factory(),
            'player_of_match' => $this->faker->boolean(10),
        ];
    }
}
