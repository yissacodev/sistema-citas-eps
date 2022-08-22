<?php

namespace Database\Seeders;

use App\Models\DoctorOffice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DoctorOffice::factory(50)->create();
        $doctorOffices = [
            [
                'branch_office' => '1',
                'medical_area' => '1',
                'num_office' => '1'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '1',
                'num_office' => '2'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '1',
                'num_office' => '3'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '1',
                'num_office' => '4'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '1',
                'num_office' => '5'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '1',
                'num_office' => '6'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '2',
                'num_office' => '7'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '2',
                'num_office' => '8'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '2',
                'num_office' => '9'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '2',
                'num_office' => '10'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '2',
                'num_office' => '11'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '2',
                'num_office' => '12'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '3',
                'num_office' => '13'
            ],
            [
                'branch_office' => '1',
                'medical_area' => '3',
                'num_office' => '14'
            ],

            [
                'branch_office' => '2',
                'medical_area' => '1',
                'num_office' => '1'
            ],
            [
                'branch_office' => '2',
                'medical_area' => '2',
                'num_office' => '2'
            ],
            [
                'branch_office' => '3',
                'medical_area' => '4',
                'num_office' => '1'
            ],
            [
                'branch_office' => '3',
                'medical_area' => '4',
                'num_office' => '2'
            ],
            [
                'branch_office' => '3',
                'medical_area' => '4',
                'num_office' => '3'
            ],
            [
                'branch_office' => '3',
                'medical_area' => '3',
                'num_office' => '4'
            ],
            [
                'branch_office' => '3',
                'medical_area' => '3',
                'num_office' => '5'
            ],
            [
                'branch_office' => '4',
                'medical_area' => '1',
                'num_office' => '1'
            ],
            [
                'branch_office' => '4',
                'medical_area' => '2',
                'num_office' => '2'
            ],
            [
                'branch_office' => '5',
                'medical_area' => '1',
                'num_office' => '1'
            ],
            [
                'branch_office' => '5',
                'medical_area' => '4',
                'num_office' => '2'
            ],
            [
                'branch_office' => '5',
                'medical_area' => '5',
                'num_office' => '3'
            ],
            [
                'branch_office' => '5',
                'medical_area' => '11',
                'num_office' => '4'
            ],
            [
                'branch_office' => '5',
                'medical_area' => '11',
                'num_office' => '5'
            ],
            [
                'branch_office' => '6',
                'medical_area' => '6',
                'num_office' => '1'
            ],
            [
                'branch_office' => '6',
                'medical_area' => '7',
                'num_office' => '2'
            ],
            [
                'branch_office' => '6',
                'medical_area' => '7',
                'num_office' => '3'
            ],
            [
                'branch_office' => '6',
                'medical_area' => '7',
                'num_office' => '4'
            ],
            [
                'branch_office' => '6',
                'medical_area' => '8',
                'num_office' => '5'
            ],
            [
                'branch_office' => '7',
                'medical_area' => '8',
                'num_office' => '1'
            ],
            [
                'branch_office' => '7',
                'medical_area' => '9',
                'num_office' => '2'
            ],
            [
                'branch_office' => '8',
                'medical_area' => '12',
                'num_office' => '1'
            ],
            [
                'branch_office' => '8',
                'medical_area' => '7',
                'num_office' => '2'
            ],
            [
                'branch_office' => '8',
                'medical_area' => '13',
                'num_office' => '3'
            ],
            [
                'branch_office' => '9',
                'medical_area' => '10',
                'num_office' => '1'
            ],
            [
                'branch_office' => '10',
                'medical_area' => '11',
                'num_office' => '1'
            ],
            [
                'branch_office' => '10',
                'medical_area' => '13',
                'num_office' => '2'
            ],
            [
                'branch_office' => '10',
                'medical_area' => '12',
                'num_office' => '3'
            ],

        ];

        foreach($doctorOffices as $doctorOffice){
            DoctorOffice::create($doctorOffice);
        }
    }
}
