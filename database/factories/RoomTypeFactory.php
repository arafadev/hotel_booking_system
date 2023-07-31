<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomType>
 */
class RoomTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'size' => fake()->numberBetween(1, 5),
            'price' => fake()->numberBetween(100, 500),
            'amount' => fake()->numberBetween(1, 10),
            'created_at' => fake()->dateTimeBetween('-9 year', '-4 days'),
            'updated_at' => fake()->dateTimeBetween('-2 days', '-1 minute'),

        ];
    }
}
