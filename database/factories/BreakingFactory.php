<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreakingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'breaking_start_time' => $this->faker->dateTime(),
            'breaking_end_time' => $this->faker->dateTime(),
        ];
    }
}
