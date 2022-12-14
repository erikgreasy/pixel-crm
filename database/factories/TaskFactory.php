<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(4, asText: true),
            'estimate' => $this->faker->numberBetween(3, 10),
            'time_spent' => $this->faker->numberBetween(3, 10),
            'client_id' => Client::factory()->create(),
        ];
    }
}
