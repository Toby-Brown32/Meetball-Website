<?php

namespace Database\Factories;

use App\Models\FootballMatch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<FootballMatch>
 */
class FootballMatchFactory extends Factory
{
    protected $model = FootballMatch::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'season_id' => \App\Models\Season::factory(),
            'match_date' => $this->faker->date(),
            'bleu_goals' => $this->faker->numberBetween(0, 10),
            'salmon_goals' => $this->faker->numberBetween(0, 10),
            'lemon_goals' => $this->faker->numberBetween(0, 10),
            'green_goals' => $this->faker->numberBetween(0, 10),
            'player_of_match_id' => null,
        ];
    }
}
