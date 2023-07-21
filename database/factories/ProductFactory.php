<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'noun' => fake()->name(),
            'quantity' => fake()->randomNumber(2, 10, 100),
            'price' => fake()->randomFloat(3, 100, 500),
        ];
    }
}
