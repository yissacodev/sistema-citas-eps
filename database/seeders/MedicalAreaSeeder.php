<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalArea;

class MedicalAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicalAreas = [
            [
                'id_area' => '1',
                'name_area' => 'Medicina general',
                'specialist_area' => 'Médico general',
                'desc_area' => 'La medicina general es una rama de la medicina que no requiere especialización y trata un espectro muy amplio y variado de patologías. Su función es fundamental, ya que se centra, entre otras cosas, en la prevención de enfermedades y en garantizar un estado de salud general óptimo en los pacientes.',
                'color_area' => 'area-color__gnral',
                'icon_area' => 'fas fa-clinic-medical card-icon'
            ],
            [
                'id_area' => '2',
                'name_area' => 'Odontología',
                'specialist_area' => 'Odontólogo',
                'desc_area' => 'La odontología es una de las ciencias de la salud que se encarga del diagnóstico, tratamiento y prevención de las enfermedades del aparato estomatognático, el cual incluye además de los dientes, las encías, el tejido periodontal, el maxilar superior, el maxilar inferior y la articulación temporomandibular. Las principales enfermedades de las que se ocupa la odontología son la caries dental, la maloclusión y la enfermedad periodontal.',
                'color_area' => 'area-color__odo',
                'icon_area' => 'fas fa-tooth card-icon'
            ],
            [
                'id_area' => '3',
                'name_area' => 'Cardiología',
                'specialist_area' => 'Cardiólogo',
                'desc_area' => 'La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio. Es médica, pero no quirúrgica; los especialistas en el abordaje quirúrgico del corazón son el cirujano cardiaco o el cirujano cardiovascular.',
                'color_area' => 'area-color__car',
                'icon_area' => 'fas fa-heartbeat card-icon',
            ],
            [
                'id_area' => '4',
                'name_area' => 'Psicología',
                'specialist_area' => 'Psicológia',
                'desc_area' => 'La psicología es la ciencia que estudia la conducta humana y los procesos mentales. Al ser bastante amplia, para su estudio y aplicación se divide en dos vertientes: la psicología básica y la psicología aplicada.',
                'color_area' => 'area-color__psi',
                'icon_area' => 'fas card-icon',
            ],
            [
                'id_area' => '5',
                'name_area' => 'Endocrinología',
                'specialist_area' => 'Endocrinólogo',
                'desc_area' => 'La endocrinología es el campo de la medicina que estudia las hormonas del cuerpo y los órganos que las producen. Las hormonas son sustancias que se producen en varios órganos (glándulas endocrinas) como la  tiroides o el páncreas y son enviadas a través de la sangre para controlar diversas funciones de  todo el organismo, las cuales son esenciales para la vida.',
                'color_area' => 'area-color__endo',
                'icon_area' => 'fas card-icon',
            ],
            [
                'id_area' => '6',
                'name_area' => 'Nutrición',
                'specialist_area' => 'Nutricionista',
                'desc_area' => 'La nutrición clínica es la disciplina que se ocupa de la prevención, diagnóstico y tratamiento de los cambios nutricionales y metabólicos relacionados con enfermedades agudas o crónicas y con condiciones causadas por un exceso o falta de energía.',
                'color_area' => 'area-color__nut',
                'icon_area' => 'fas fa-apple-alt card-icon',
            ],
            [
                'id_area' => '7',
                'name_area' => 'Urología',
                'specialist_area' => 'Urólogo',
                'desc_area' => 'La Urología es un área médico-quirúrgica que maneja el sistema urinario y genital de hombres y mujeres. Esto incluye el manejo de las patologías de órganos como la vejiga, riñón, uréter, uretra, próstata, testículos, pene y vagina.',
                'color_area' => 'area-color__uro',
                'icon_area' => 'fas card-icon',
            ],
            [
                'id_area' => '8',
                'name_area' => 'Nefrología',
                'specialist_area' => 'Nefrólogo',
                'desc_area' => 'La Nefrología es un servicio médico encargado del diagnóstico y tratamiento de patologías agudas o crónicas que afectan los riñones. Este servicio busca mejorar la calidad de vida de los pacientes.',
                'color_area' => 'area-color__nephro',
                'icon_area' => 'fas fa-kidneys card-icon'
            ],
            [
                'id_area' => '9',
                'name_area' => 'Ginecología',
                'specialist_area' => 'Ginecólogo',
                'desc_area' => 'La ginecología es el campo de la medicina que se centra en el sistema reproductor femenino, también conocido como aparato reproductor femenino. Una revisión ginecológica es un control o "chequeo anual", como los controles anuales de la vista o de los dientes.',
                'color_area' => 'area-color__gyneco',
                'icon_area' => 'fas card-icon',
            ],
            [
                'id_area' => '10',
                'name_area' => 'Neulomogía',
                'specialist_area' => 'Neumólogo',
                'desc_area' => 'La neumología o neumonología es la especialidad médica encargada del estudio de las enfermedades del aparato respiratorio y centra su campo de actuación en el diagnóstico, tratamiento y prevención de las enfermedades del pulmón, la pleura y el mediastino.',
                'color_area' => 'area-color__neumo',
                'icon_area' => 'fas card-icon',
            ],
            [
                'id_area' => '11',
                'name_area' => 'Otorrinolaringología',
                'specialist_area' => 'Otorrinolaringólogo',
                'desc_area' => 'La Otorrinolaringología es la especialidad médica que se encarga del estudio tanto médico como quirúrgico, de las enfermedades del oído, las vías respiratorias superiores y parte de las inferiores, incluyendo nariz, senos paranasales, faringe y laringe.',
                'color_area' => 'area-color__otorhino',
                'icon_area' => 'fas fa-assistive-listening-systems card-icon',
            ],
            [
                'id_area' => '12',
                'name_area' => 'Oftafmología',
                'specialist_area' => 'Oftafmólogo',
                'desc_area' => 'La Oftalmología es la especialidad médica que se encarga del diagnostico y tratamiento de las enfermedades del ojo y sus anexos (parpados y vias lagrimales). Está dividida en varias supra especialidades como la retina, el glaucoma, la oftalmologia pediratica y estrabismo, la oculoplastica, la oncologia ocular y la cornea, catarata y cirugia refractiva.',
                'color_area' => 'area-color__ophtha',
                'icon_area' => 'fas fa-eye card-icon',
            ],
            [
                'id_area' => '13',
                'name_area' => 'Fonología',
                'specialist_area' => 'Fonólogo',
                'desc_area' => 'La Fonoaudiología es la especialidad médica que se ocupa de evaluar, diagnosticar e intervenir en los trastornos de la comunicación humana, aunque, también despliega una importante tarea en la optimización de la comunicación humana que se da en términos normales.',
                'color_area' => 'area-color__phon',
                'icon_area' => 'fas fa-deaf card-icon',
            ],

        ];

        foreach ($medicalAreas as $medicalArea) {
            MedicalArea::create($medicalArea);
        }
    }
}
