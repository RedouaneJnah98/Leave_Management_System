<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'designation_id' => $this->faker->numberBetween(1, 6),
            'department_id' => $this->faker->numberBetween(1, 4),
            'first_name' => $this->faker->firstName('male' | 'female'),
            'middle_name' => $this->faker->title(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
            'id_number' => $this->faker->unique()->numerify('QR-#######'),
            'age' => $this->faker->numberBetween(22, 60),
            'contact' => $this->faker->e164PhoneNumber(),
            'username' => $this->faker->userName(),
//            'image_profile' => $this->faker->image(storage_path('app/public/images'), 50, 50, 'animals', false),
            'image_profile' => $this->faker->imageUrl(50, 50, 'people', true),
            'status' => $this->faker->randomElement(['Active', 'Not active']),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
