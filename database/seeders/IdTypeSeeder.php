<?php

namespace Database\Seeders;

use App\Models\IdType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $idtypes = [
            [
                'id_type' => '1',
                'name_type' => 'Registro civil'
            ],
            [
                'id_type' => '2',
                'name_type' => 'Tarjeta de identidad'
            ],
            [
                'id_type' => '3',
                'name_type' => 'Cedula de ciudadanía'
            ],
            [
                'id_type' => '4',
                'name_type' => 'Cédula extranjera'
            ],
        ];
        foreach ($idtypes as $idtype){
            IdType::create($idtype);
        }
    }
}
