<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => rtrim(fake()->text(20) . '_' . rand(99, 999), '.'),
            'description' => fake()->sentence(),
            'created_at' => fake()->dateTimeBetween('-10 year', '-20 day'),
            'updated_at' => fake()->dateTimeBetween('-1 year', '-5 day'),
        ];
    }
}
