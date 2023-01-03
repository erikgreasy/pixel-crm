<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory()->create()->id,
            'status' => $this->faker->randomElement(OrderStatus::cases())
        ];
    }
}
