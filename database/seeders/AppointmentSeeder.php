<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments = [
            [
                'id_appoint' => '1',
                'patient' => '2',
                'medic' => '5',
                'title_appoint' => 'Revisión anual',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '1',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-29',
                'appoint_end_date' => '2022-08-29',
                'appoint_start_hour' => '08:30',
                'appoint_end_hour' => '09:00'
            ],
            [
                'id_appoint' => '2',
                'patient' => '4',
                'medic' => '5',
                'title_appoint' => 'Cita rutinaria',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '1',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-29',
                'appoint_end_date' => '2022-08-29',
                'appoint_start_hour' => '09:00',
                'appoint_end_hour' => '09:30'
            ],
            [
                'id_appoint' => '3',
                'patient' => '7',
                'medic' => '5',
                'title_appoint' => 'Cita remisión cardiología',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '1',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-29',
                'appoint_end_date' => '2022-08-29',
                'appoint_start_hour' => '09:30',
                'appoint_end_hour' => '10:00'
            ],
            [
                'id_appoint' => '4',
                'patient' => '8',
                'medic' => '5',
                'title_appoint' => 'Cita remisión pruebas de sangre',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '2',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-29',
                'appoint_end_date' => '2022-08-29',
                'appoint_start_hour' => '10:00',
                'appoint_end_hour' => '10:30',
            ],
            [
                'id_appoint' => '12',
                'patient' => '12',
                'medic' => '5',
                'title_appoint' => 'Cita remisión pruebas de sangre',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '2',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-28',
                'appoint_end_date' => '2022-08-28',
                'appoint_start_hour' => '11:30',
                'appoint_end_hour' => '12:00',
            ],
            [
                'id_appoint' => '15',
                'patient' => '15',
                'medic' => '5',
                'title_appoint' => 'Cita remisión pruebas de sangre',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '2',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-28',
                'appoint_end_date' => '2022-08-28',
                'appoint_start_hour' => '01:00',
                'appoint_end_hour' => '01:30',
            ],
            [
                'id_appoint' => '16',
                'patient' => '16',
                'medic' => '5',
                'title_appoint' => 'Cita remisión pruebas de sangre',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '2',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-28',
                'appoint_end_date' => '2022-08-28',
                'appoint_start_hour' => '01:30',
                'appoint_end_hour' => '02:00',
            ],
            [
                'id_appoint' => '11',
                'patient' => '12',
                'medic' => '5',
                'title_appoint' => 'Cita remisión pruebas de sangre',
                'desc_appoint' => 'Cita médica rutinaria',
                'status_appoint' => '2',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-28',
                'appoint_end_date' => '2022-08-28',
                'appoint_start_hour' => '11:00',
                'appoint_end_hour' => '11:30',
            ],
            [
                'id_appoint' => '5',
                'patient' => '9',
                'medic' => '6', /*Odontólogo*/
                'title_appoint' => 'Control endodoncia',
                'desc_appoint' => 'Cita odontológica endodoncia',
                'status_appoint' => '1',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-26',
                'appoint_end_date' => '2022-08-26',
                'appoint_start_hour' => '08:30',
                'appoint_end_hour' => '09:00'
            ],
            [
                'id_appoint' => '6',
                'patient' => '10',
                'medic' => '6', /*Odontólogo*/
                'title_appoint' => 'Tratamiento endodoncia',
                'desc_appoint' => 'Cita odontológica tratamiento endodoncia',
                'status_appoint' => '1',
                'null_desc_appoint' => '',
                'appoint_start_date' => '2022-08-26',
                'appoint_end_date' => '2022-08-26',
                'appoint_start_hour' => '09:00',
                'appoint_end_hour' => '09:30'
            ],

        ];

        foreach ($appointments as $appointment) {
            Appointment::create($appointment);
        }
    }
}
