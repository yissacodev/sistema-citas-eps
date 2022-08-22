<?php

namespace Database\Seeders;

use App\Models\Medic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MedicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medics = Medic::factory(20)->create();

        foreach ($medics as $medic){
            User::create([
                'id' => $medic['id_user'],
                'name' => $medic['name_medic'],
                'email' => $medic['email_medic'],
                'email_verified_at' => now(),
                'password' => bcrypt($medic['identify_medic']),
                'remember_token' => Str::random(10)
            ])->assignRole('Doctor');
        }
    }
}
