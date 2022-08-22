<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medic>
 */
class MedicFactory extends Factory
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
            'identify_medic' => $this->faker->unique()->numerify('##########'),
            'id_user' => $this->faker->unique()->numerify('1####'),
            'name_medic' => $this->faker->firstName(),
            'last_medic' => $this->faker->lastName(),
            'genre_medic' => $this->faker->regexify('(M|F)'),//'M',
            'birth_medic' => $this->faker->date(),
            'social_strat_medic' => $this->faker->numberBetween($min = 1, $max = 4), /*Arreglar esto, son las especializaciones. Solo tengo 4 por ahora */
            'eps_doctor_office' => $this->faker->unique()->numberBetween($min = 1, $max = 40),
            'department_medic' => '41',
            'municipality_medic' => '4',
            'neigh_medic' => $this->faker->streetName(),
            'home_address_medic' => $this->faker->address(),
            'email_medic' => $this->faker->unique()->safeEmail(),
            'tel_medic' => $this->faker->e164PhoneNumber(),
            'cel_medic' => $this->faker->e164PhoneNumber(),
            'status_medic' => true,
            'desc_medic' => $this->faker->text($maxNbChars = 50)
//
        ];
    }
}
