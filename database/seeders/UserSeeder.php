<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Yesid Acosta',
            'email' => 'yesid9511@hotmail.com',
            'password' => bcrypt('oresama9611')
        ])->assignRole('Admin');
        User::factory(40)->create();

        $users = [
            [
                'id'    => '70',
                'name' => 'Fernando Pulido',
                'email' => 'pulido@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'id'    => '71',
                'name' => 'Maria Alegre',
                'email' => 'alegria@gmail.com',
                'password' => bcrypt('password')
            ],
            // [
            //     'name' => '',
            //     'email' => '',
            //     'password' => bcrypt('')
            // ],
        ];

        foreach ($users as $user) {
            User::create($user)->assignRole('Usuario');
        }
    }
}
