<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = Patient::factory(20)->create();   
        foreach ($patients as $patient){
            User::create([
                'id' => $patient['id_user'],
                'name' => $patient['name_patient'],
                'email' => $patient['email_patient'],
                'email_verified_at' => now(),
                'password' => bcrypt($patient['identify_patient']),
                'remember_token' => Str::random(10)
            ])->assignRole('User');
        }
    }
}
