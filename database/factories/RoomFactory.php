<?php

namespace Database\Factories;

use App\Models\RoomType;
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
            'name' => rtrim(fake()->text(20) . '_' . rand(99, 999), '.'),
            'description' => fake()->sentence(),
            'created_at' => fake()->dateTimeBetween('-10 year', '-5 year'),
            'updated_at' => fake()->dateTimeBetween('-3 year', '-1 year'),
            'room_type_id' => RoomType::factory()->create(),

        ];
    }
}
