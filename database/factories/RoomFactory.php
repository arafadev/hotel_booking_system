<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(20). rand(99, 999),
            'description' => fake()->sentence(),
            'created_at' => fake()->dateTimeBetween('-10 year', '-5 year'),
            'updated_at' => fake()->dateTimeBetween('-3 year', '-1 year'),
        ];
    }
}
