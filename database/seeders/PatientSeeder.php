<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = [/*
            [   'idtype' => '1',
                'identify_patient' => '23432123',
                'id_user' => '70',
                'name_patient' => 'Fernando Pulido',
                'last_patient' => 'Calvo Gordillo',
                'genre_patient' => 'M',
                'birth_patient' => '1990-03-15',
                'social_strat_patient' => '2',
                'department_patient' => '41',
                'municipality_patient' => '4',
                'neigh_patient' => 'Rosario',
                'home_address_patient' => 'Casa 5 Manzana 20',
                'email_patient' => 'pulido@gmail.com',
                'tel_patient' => '7326104',
                'cel_patient' => '3125556677',
                'status_patient' => true,
                'desc_patient' => 'Lorem ipsum'],

                ['idtype' => '2',
                'identify_patient' => '30786343',
                'id_user' => '71',
                'name_patient' => 'Maria Alegre',
                'last_patient' => 'De Mier Dulce',
                'genre_patient' => 'F',
                'birth_patient' => '1978-05-14',
                'social_strat_patient' => '1',
                'department_patient' => '52',
                'municipality_patient' => '126',
                'neigh_patient' => 'Santa Bárbara',
                'home_address_patient' => 'Calle 43b No 3-23',
                'email_patient' => 'alegria@gmail.com',
                'tel_patient' => '7326104',
                'cel_patient' => '3125556677',
                'status_patient' => true,
                'desc_patient' => 'Lorem ipsum'],
        */];

        
        foreach ($patients as $patient){
            Patient::create($patient);
        }
    }
}
