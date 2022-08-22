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
        $Departments = [
            [
                'id_department' => '5',
                'department_name' => 'Antioquia'
            ],
            [
                'id_department' => '8',
                'department_name' => 'Atlántico'
            ],
            [
                'id_department' => '11',
                'department_name' => 'Bogotá, D.C.'
            ],
            [
                'id_department' => '13',
                'department_name' => 'Bolívar'
            ],
            [
                'id_department' => '15',
                'department_name' => 'Boyacá'
            ],
            [
                'id_department' => '17',
                'department_name' => 'Caldas'
            ],
            [
                'id_department' => '18',
                'department_name' => 'Caquetá'
            ],
            [
                'id_department' => '19',
                'department_name' => 'Cauca'
            ],
            [
                'id_department' => '20',
                'department_name' => 'Cesar'
            ],
            [
                'id_department' => '23',
                'department_name' => 'Córdoba'
            ],
            [
                'id_department' => '25',
                'department_name' => 'Cundinamarca'
            ],
            [
                'id_department' => '27',
                'department_name' => 'Chocó'
            ],
            [
                'id_department' => '41',
                'department_name' => 'Huila'
            ],
            [
                'id_department' => '44',
                'department_name' => 'La Guajira'
            ],
            [
                'id_department' => '47',
                'department_name' => 'Magdalena'
            ],
            [
                'id_department' => '50',
                'department_name' => 'Meta'
            ],
            [
                'id_department' => '52',
                'department_name' => 'Nariño'
            ],
            [
                'id_department' => '54',
                'department_name' => 'Norte De Santander'
            ],
            [
                'id_department' => '63',
                'department_name' => 'Quindio'
            ],
            [
                'id_department' => '66',
                'department_name' => 'Risaralda'
            ],
            [
                'id_department' => '68',
                'department_name' => 'Santander'
            ],
            [
                'id_department' => '70',
                'department_name' => 'Sucre'
            ],
            [
                'id_department' => '73',
                'department_name' => 'Tolima'
            ],
            [
                'id_department' => '76',
                'department_name' => 'Valle Del Cauca'
            ],
            [
                'id_department' => '81',
                'department_name' => 'Arauca'
            ],
            [
                'id_department' => '85',
                'department_name' => 'Casanare'
            ],
            [
                'id_department' => '86',
                'department_name' => 'Putumayo'
            ],
            [
                'id_department' => '88',
                'department_name' => 'Archipiélago De San Andrés, Providencia Y Santa Catalina'
            ],
            [
                'id_department' => '91',
                'department_name' => 'Amazonas'
            ],
            [
                'id_department' => '94',
                'department_name' => 'Guainía'
            ],
            [
                'id_department' => '95',
                'department_name' => 'Guaviare'
            ],
            [
                'id_department' => '97',
                'department_name' => 'Vaupés'
            ],
            [
                'id_department' => '99',
                'department_name' => 'Vichada'
            ],
            
        ];
        
        foreach ($Departments as $department){
            Department::create($department);
        }

    }
}
