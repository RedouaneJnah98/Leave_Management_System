<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name('male' | 'female'),
            'contact' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->email(),
            'username' => $this->faker->unique()->userName(),
            'password' => Hash::make('12345678'),
            'admin_category' => $this->faker->randomElement(['Admin', 'Staff']),
            'admin_status' => $this->faker->randomElement(['Active', 'Not active']),
        ];
    }
}
