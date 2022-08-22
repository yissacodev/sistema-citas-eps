<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idtype' => $this->faker->numberBetween($min = 1, $max = 4),
            'identify_patient' => $this->faker->numerify('##########'),
            'id_user' => $this->faker->numerify('3###'),
            'name_patient' => $this->faker->firstName(),
            'last_patient' => $this->faker->lastName(),
            'genre_patient' => $this->faker->regexify('(M|F)'),//'M',
            'birth_patient' => $this->faker->date(),
            'social_strat_patient' => $this->faker->numberBetween($min = 1, $max = 6),
            'department_patient' => '41',
            'municipality_patient' => '4',
            'neigh_patient' => $this->faker->streetName(),
            'home_address_patient' => $this->faker->address(),
            'email_patient' => $this->faker->unique()->safeEmail(),
            'tel_patient' => $this->faker->e164PhoneNumber(),
            'cel_patient' => $this->faker->e164PhoneNumber(),
            'status_patient' => true,
            'desc_patient' => $this->faker->text($maxNbChars = 50)
        ];
    }
}
