<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'forename' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'player_level' => $this->faker->numberBetween(1, 10),
            'nickname' => $this->faker->optional()->userName,
            'missed_games' => $this->faker->numberBetween(0, 5),
        ];
    }
}
