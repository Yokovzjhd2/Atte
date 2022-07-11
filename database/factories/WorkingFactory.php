<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'working_start_time' => $this->faker->dateTime(),
            'working_end_time' => $this->faker->dateTime(),
        ];
    }
}
