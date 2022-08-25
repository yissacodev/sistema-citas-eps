<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'name' => 'Yesid Acosta',
            'email' => 'yesid9511@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('oresama9611'),
            'remember_token' => Str::random(10)
        ])->assignRole('Admin');

        User::create([
            'name' => 'Yorth Ortegon',
            'email' => 'yorth@udenar.edu.co',
            'email_verified_at' => now(),
            'password' => bcrypt('yorth1234'),
            'remember_token' => Str::random(10)
        ])->assignRole('Admin');

        User::create([
            'name' => 'Miler España',
            'email' => 'miler005latino@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('mundo.0316'),
            'remember_token' => Str::random(10)
        ])->assignRole('Admin');

        User::create([
            'name' => 'Carlos Pepinosa',
            'email' => 'carlos.pepinosa@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('carlos123'),
            'remember_token' => Str::random(10)
        ])->assignRole('Admin');

        //$guardado = User::factory(40)->create();

    }
}
