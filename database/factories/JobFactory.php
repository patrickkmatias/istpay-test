<?php

namespace Database\Factories;

use App\Constants;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'type' => Constants::JOB_TYPES[array_rand(Constants::JOB_TYPES)],
            'paused' => false
        ];
           
    }
}
