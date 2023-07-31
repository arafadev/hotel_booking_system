<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'check_in' => fake()->dateTimeBetween('+2 year', '+5 year'),
            'check_out' => fake()->dateTimeBetween('+6 year', '+10 year'),
            'price' => fake()->numberBetween(100,200),

        ];
    }
}
