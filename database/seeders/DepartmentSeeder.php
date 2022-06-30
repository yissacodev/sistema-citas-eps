<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Departments = [/*
            [
                'id_department' => '5',
                'department_name' => 'ANTIOQUIA'
            ],
            [
                'id_department' => '8',
                'department_name' => 'ATLÁNTICO'
            ],
            [
                'id_department' => '11',
                'department_name' => 'BOGOTÁ, D.C.'
            ],
            [
                'id_department' => '13',
                'department_name' => 'BOLÍVAR'
            ],
            [
                'id_department' => '15',
                'department_name' => 'BOYACÁ'
            ],
            [
                'id_department' => '17',
                'department_name' => 'CALDAS'
            ],
            [
                'id_department' => '18',
                'department_name' => 'CAQUETÁ'
            ],
            [
                'id_department' => '19',
                'department_name' => 'CAUCA'
            ],
            [
                'id_department' => '20',
                'department_name' => 'CESAR'
            ],
            [
                'id_department' => '23',
                'department_name' => 'CÓRDOBA'
            ],
            [
                'id_department' => '25',
                'department_name' => 'CUNDINAMARCA'
            ],
            [
                'id_department' => '27',
                'department_name' => 'CHOCÓ'
            ],
            [
                'id_department' => '41',
                'department_name' => 'HUILA'
            ],
            [
                'id_department' => '44',
                'department_name' => 'LA GUAJIRA'
            ],
            [
                'id_department' => '47',
                'department_name' => 'MAGDALENA'
            ],
            [
                'id_department' => '50',
                'department_name' => 'META'
            ],
            [
                'id_department' => '52',
                'department_name' => 'NARIÑO'
            ],
            [
                'id_department' => '54',
                'department_name' => 'NORTE DE SANTANDER'
            ],
            [
                'id_department' => '63',
                'department_name' => 'QUINDIO'
            ],
            [
                'id_department' => '66',
                'department_name' => 'RISARALDA'
            ],
            [
                'id_department' => '68',
                'department_name' => 'SANTANDER'
            ],
            [
                'id_department' => '70',
                'department_name' => 'SUCRE'
            ],
            [
                'id_department' => '73',
                'department_name' => 'TOLIMA'
            ],
            [
                'id_department' => '76',
                'department_name' => 'VALLE DEL CAUCA'
            ],
            [
                'id_department' => '81',
                'department_name' => 'ARAUCA'
            ],
            [
                'id_department' => '85',
                'department_name' => 'CASANARE'
            ],
            [
                'id_department' => '86',
                'department_name' => 'PUTUMAYO'
            ],
            [
                'id_department' => '88',
                'department_name' => 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'
            ],
            [
                'id_department' => '91',
                'department_name' => 'AMAZONAS'
            ],
            [
                'id_department' => '94',
                'department_name' => 'GUAINÍA'
            ],
            [
                'id_department' => '95',
                'department_name' => 'GUAVIARE'
            ],
            [
                'id_department' => '97',
                'department_name' => 'VAUPÉS'
            ],
            [
                'id_department' => '99',
                'department_name' => 'VICHADA'
            ],
            
        */];
        
        foreach ($Departments as $department){
            Department::create($department);
        }

    }
}
