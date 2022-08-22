<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorOffice>
 */
class DoctorOfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'branch_office' => $this->faker->numberBetween($min = 1, $max = 10),
            'medical_area' => $this->faker->numberBetween($min = 1, $max = 13),
            'num_office' => $this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}
