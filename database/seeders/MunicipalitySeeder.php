<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [/*
            [
                'id_municipality' => '4',
                'municipality_name' => 'Acevedo',
                'department' => '41',
            ],
            [
                'id_municipality' => '126',
                'municipality_name' => 'Buesaco',
                'department' => '52',
            ],
            [
                'id_municipality' => '001',
                'municipality_name' => 'Pasto',
                'department' => '52',
            ]
        */];
        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}
