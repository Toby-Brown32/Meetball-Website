<?php

namespace Database\Factories;

use App\Models\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Season>
 */
class SeasonFactory extends Factory
{
    protected $model = Season::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->date('Y-m-d');
        $end = $this->faker->dateTimeBetween($start, '+1 year')->format('Y-m-d');
        return [
            'name' => 'Season ' . $this->faker->unique()->year,
            'start_date' => $start,
            'end_date' => $end,
        ];
    }
}
