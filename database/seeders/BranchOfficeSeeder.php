<?php

namespace Database\Seeders;

use App\Models\BranchOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branchOffices = [
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud Pandiaco',
                'eps_branch_address' => 'Calle 19 con Carrera 44, Pasto, Nariño',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes / 7am - 7pm - Sábado / 7am - 1pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud Buesaquillo',
                'eps_branch_address' => 'Corregimiento La alianza',
                'tel_branch'  => '7201372',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes / 7am - 7pm - Sábado / 7am - 1pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro Hospital La Rosa',
                'eps_branch_address' => 'Diagonal 12 A No. 3a-19',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud San Vicente',
                'eps_branch_address' => 'Cra. 35 #61 6-41',
                'tel_branch'  => '7239949',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud Tamasagra',
                'eps_branch_address' => 'Calle 8F No 22b-95.',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud Genoy',
                'eps_branch_address' => 'Genoy, Pasto, Nariño',
                'tel_branch'  => '7232125',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud Catambuco',
                'eps_branch_address' => 'Corregimiento de Catambuco',
                'tel_branch'  => '7217717',
                'tel2_branch' => '7244418',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm'
            ],
            [   
                'medical_area' => '1',
                'name_branch_office' => 'Centro de Salud Rosario',
                'eps_branch_address' => 'Diagonal 16 Nº 12e Esquina Barrio El Rosario',
                'tel_branch'  => '3013434165',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '2',
                'name_branch_office' => 'Centro de Salud Pandiaco',
                'eps_branch_address' => 'Calle 19 con Carrera 44, Pasto, Nariño',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes / 7am - 7pm - Sábado / 7am - 1pm'
            ],
            [   
                'medical_area' => '2',
                'name_branch_office' => 'Centro Hospital La Rosa',
                'eps_branch_address' => 'Diagonal 12 A No. 3a-19',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '2',
                'name_branch_office' => 'Centro de Salud Catambuco',
                'eps_branch_address' => 'Corregimiento de Catambuco',
                'tel_branch'  => '7217717',
                'tel2_branch' => '7244418',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm'
            ],
            [   
                'medical_area' => '2',
                'name_branch_office' => 'Centro de Salud Tamasagra',
                'eps_branch_address' => 'Calle 8F No 22b-95.',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '3',
                'name_branch_office' => 'Hospital Local Civil',
                'eps_branch_address' => ' Carrera 24 Calle 27 Esquina Barrio El Calvario',
                'tel_branch'  => '7213912',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '3',
                'name_branch_office' => 'Centro Hospital La Rosa',
                'eps_branch_address' => 'Diagonal 12 A No. 3a-19',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '3',
                'name_branch_office' => 'Centro Hospital 1D Santa Mónica',
                'eps_branch_address' => 'Calle 21e Carrera 6e-54',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '4',
                'name_branch_office' => 'Centro de Salud Tamasagra',
                'eps_branch_address' => 'Calle 8F No 22b-95.',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            [   
                'medical_area' => '4',
                'name_branch_office' => 'Centro de Salud Tamasagra',
                'eps_branch_address' => 'Calle 8F No 22b-95.',
                'tel_branch'  => '7244418',
                'tel2_branch' => '',
                'office_hours_branch' => 'Lunes a viernes de 7am - 7pm y Sábado de 7am - 1pm'
            ],
            
        ];

        foreach ($branchOffices as $branchOffice) {
            BranchOffice::create($branchOffice);
        }
    }
}
