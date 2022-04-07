<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LeaveApplication>
 */
class LeaveApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $year = rand(2021, 2022);
        $month = rand(1, 12);
        $day = rand(1, 28);

        $date = Carbon::create($year, $month, $day, 0, 0, 0);

        return [
            'leave_type_id' => $this->faker->numberBetween(1, 6),
            'employee_id' => $this->faker->numberBetween(1, 20),
            'reference_number' => $this->faker->unique()->numerify('QR-#######'),
            'from_date' => $date->format('Y-m-d H:i:s'),
            'to_date' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
        ];
    }
}
