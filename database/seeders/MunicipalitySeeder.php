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

        $municipalities = [
            [
                "id_municipality" => '1',
                "municipality_name" => "Abriaquí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '2',
                "municipality_name" => "Acacías",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '3',
                "municipality_name" => "Acandí",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '4',
                "municipality_name" => "Acevedo",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '5',
                "municipality_name" => "Achí",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '6',
                "municipality_name" => "Agrado",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '7',
                "municipality_name" => "Agua de Dios",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '8',
                "municipality_name" => "Aguachica",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '9',
                "municipality_name" => "Aguada",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '10',
                "municipality_name" => "Aguadas",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '11',
                "municipality_name" => "Aguazul",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '12',
                "municipality_name" => "Agustín Codazzi",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '13',
                "municipality_name" => "Aipe",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '14',
                "municipality_name" => "Albania",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '15',
                "municipality_name" => "Albania",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '16',
                "municipality_name" => "Albania",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '17',
                "municipality_name" => "Albán",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '18',
                "municipality_name" => "Albán (San José)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '19',
                "municipality_name" => "Alcalá",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '20',
                "municipality_name" => "Alejandria",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '21',
                "municipality_name" => "Algarrobo",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '22',
                "municipality_name" => "Algeciras",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '23',
                "municipality_name" => "Almaguer",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '24',
                "municipality_name" => "Almeida",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '25',
                "municipality_name" => "Alpujarra",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '26',
                "municipality_name" => "Altamira",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '27',
                "municipality_name" => "Alto Baudó (Pie de Pato)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '28',
                "municipality_name" => "Altos del Rosario",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '29',
                "municipality_name" => "Alvarado",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '30',
                "municipality_name" => "Amagá",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '31',
                "municipality_name" => "Amalfi",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '32',
                "municipality_name" => "Ambalema",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '33',
                "municipality_name" => "Anapoima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '34',
                "municipality_name" => "Ancuya",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '35',
                "municipality_name" => "Andalucía",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '36',
                "municipality_name" => "Andes",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '37',
                "municipality_name" => "Angelópolis",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '38',
                "municipality_name" => "Angostura",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '39',
                "municipality_name" => "Anolaima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '40',
                "municipality_name" => "Anorí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '41',
                "municipality_name" => "Anserma",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '42',
                "municipality_name" => "Ansermanuevo",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '43',
                "municipality_name" => "Anzoátegui",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '44',
                "municipality_name" => "Anzá",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '45',
                "municipality_name" => "Apartadó",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '46',
                "municipality_name" => "Apulo",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '47',
                "municipality_name" => "Apía",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '48',
                "municipality_name" => "Aquitania",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '49',
                "municipality_name" => "Aracataca",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '50',
                "municipality_name" => "Aranzazu",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '51',
                "municipality_name" => "Aratoca",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '52',
                "municipality_name" => "Arauca",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '53',
                "municipality_name" => "Arauquita",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '54',
                "municipality_name" => "Arbeláez",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '55',
                "municipality_name" => "Arboleda (Berruecos)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '56',
                "municipality_name" => "Arboledas",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '57',
                "municipality_name" => "Arboletes",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '58',
                "municipality_name" => "Arcabuco",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '59',
                "municipality_name" => "Arenal",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '60',
                "municipality_name" => "Argelia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '61',
                "municipality_name" => "Argelia",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '62',
                "municipality_name" => "Argelia",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '63',
                "municipality_name" => "Ariguaní (El Difícil)",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '64',
                "municipality_name" => "Arjona",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '65',
                "municipality_name" => "Armenia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '66',
                "municipality_name" => "Armenia",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '67',
                "municipality_name" => "Armero (Guayabal)",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '68',
                "municipality_name" => "Arroyohondo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '69',
                "municipality_name" => "Astrea",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '70',
                "municipality_name" => "Ataco",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '71',
                "municipality_name" => "Atrato (Yuto)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '72',
                "municipality_name" => "Ayapel",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '73',
                "municipality_name" => "Bagadó",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '74',
                "municipality_name" => "Bahía Solano (Mútis)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '75',
                "municipality_name" => "Bajo Baudó (Pizarro)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '76',
                "municipality_name" => "Balboa",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '77',
                "municipality_name" => "Balboa",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '78',
                "municipality_name" => "Baranoa",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '79',
                "municipality_name" => "Baraya",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '80',
                "municipality_name" => "Barbacoas",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '81',
                "municipality_name" => "Barbosa",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '82',
                "municipality_name" => "Barbosa",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '83',
                "municipality_name" => "Barichara",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '84',
                "municipality_name" => "Barranca de Upía",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '85',
                "municipality_name" => "Barrancabermeja",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '86',
                "municipality_name" => "Barrancas",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '87',
                "municipality_name" => "Barranco de Loba",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '88',
                "municipality_name" => "Barranquilla",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '89',
                "municipality_name" => "Becerríl",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '90',
                "municipality_name" => "Belalcázar",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '91',
                "municipality_name" => "Bello",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '92',
                "municipality_name" => "Belmira",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '93',
                "municipality_name" => "Beltrán",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '94',
                "municipality_name" => "Belén",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '95',
                "municipality_name" => "Belén",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '96',
                "municipality_name" => "Belén de Bajirá",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '97',
                "municipality_name" => "Belén de Umbría",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '98',
                "municipality_name" => "Belén de los Andaquíes",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '99',
                "municipality_name" => "Berbeo",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '100',
                "municipality_name" => "Betania",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '101',
                "municipality_name" => "Beteitiva",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '102',
                "municipality_name" => "Betulia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '103',
                "municipality_name" => "Betulia",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '104',
                "municipality_name" => "Bituima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '105',
                "municipality_name" => "Boavita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '106',
                "municipality_name" => "Bochalema",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '107',
                "municipality_name" => "Bogotá D.C.",
                "department" => '11',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '108',
                "municipality_name" => "Bojacá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '109',
                "municipality_name" => "Bojayá (Bellavista)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '110',
                "municipality_name" => "Bolívar",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '111',
                "municipality_name" => "Bolívar",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '112',
                "municipality_name" => "Bolívar",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '113',
                "municipality_name" => "Bolívar",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '114',
                "municipality_name" => "Bosconia",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '115',
                "municipality_name" => "Boyacá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '116',
                "municipality_name" => "Briceño",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '117',
                "municipality_name" => "Briceño",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '118',
                "municipality_name" => "Bucaramanga",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '119',
                "municipality_name" => "Bucarasica",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '120',
                "municipality_name" => "Buenaventura",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '121',
                "municipality_name" => "Buenavista",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '122',
                "municipality_name" => "Buenavista",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '123',
                "municipality_name" => "Buenavista",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '124',
                "municipality_name" => "Buenavista",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '125',
                "municipality_name" => "Buenos Aires",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '126',
                "municipality_name" => "Buesaco",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '127',
                "municipality_name" => "Buga",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '128',
                "municipality_name" => "Bugalagrande",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '129',
                "municipality_name" => "Burítica",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '130',
                "municipality_name" => "Busbanza",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '131',
                "municipality_name" => "Cabrera",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '132',
                "municipality_name" => "Cabrera",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '133',
                "municipality_name" => "Cabuyaro",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '134',
                "municipality_name" => "Cachipay",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '135',
                "municipality_name" => "Caicedo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '136',
                "municipality_name" => "Caicedonia",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '137',
                "municipality_name" => "Caimito",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '138',
                "municipality_name" => "Cajamarca",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '139',
                "municipality_name" => "Cajibío",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '140',
                "municipality_name" => "Cajicá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '141',
                "municipality_name" => "Calamar",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '142',
                "municipality_name" => "Calamar",
                "department" => '95',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '143',
                "municipality_name" => "Calarcá",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '144',
                "municipality_name" => "Caldas",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '145',
                "municipality_name" => "Caldas",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '146',
                "municipality_name" => "Caldono",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '147',
                "municipality_name" => "California",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '148',
                "municipality_name" => "Calima (Darién)",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '149',
                "municipality_name" => "Caloto",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '150',
                "municipality_name" => "Calí",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '151',
                "municipality_name" => "Campamento",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '152',
                "municipality_name" => "Campo de la Cruz",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '153',
                "municipality_name" => "Campoalegre",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '154',
                "municipality_name" => "Campohermoso",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '155',
                "municipality_name" => "Canalete",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '156',
                "municipality_name" => "Candelaria",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '157',
                "municipality_name" => "Candelaria",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '158',
                "municipality_name" => "Cantagallo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '159',
                "municipality_name" => "Cantón de San Pablo",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '160',
                "municipality_name" => "Caparrapí",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '161',
                "municipality_name" => "Capitanejo",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '162',
                "municipality_name" => "Caracolí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '163',
                "municipality_name" => "Caramanta",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '164',
                "municipality_name" => "Carcasí",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '165',
                "municipality_name" => "Carepa",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '166',
                "municipality_name" => "Carmen de Apicalá",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '167',
                "municipality_name" => "Carmen de Carupa",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '168',
                "municipality_name" => "Carmen de Viboral",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '169',
                "municipality_name" => "Carmen del Darién (CURBARADÓ)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '170',
                "municipality_name" => "Carolina",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '171',
                "municipality_name" => "Cartagena",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '172',
                "municipality_name" => "Cartagena del Chairá",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '173',
                "municipality_name" => "Cartago",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '174',
                "municipality_name" => "Carurú",
                "department" => '97',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '175',
                "municipality_name" => "Casabianca",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '176',
                "municipality_name" => "Castilla la Nueva",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '177',
                "municipality_name" => "Caucasia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '178',
                "municipality_name" => "Cañasgordas",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '179',
                "municipality_name" => "Cepita",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '180',
                "municipality_name" => "Cereté",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '181',
                "municipality_name" => "Cerinza",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '182',
                "municipality_name" => "Cerrito",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '183',
                "municipality_name" => "Cerro San Antonio",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '184',
                "municipality_name" => "Chachaguí",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '185',
                "municipality_name" => "Chaguaní",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '186',
                "municipality_name" => "Chalán",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '187',
                "municipality_name" => "Chaparral",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '188',
                "municipality_name" => "Charalá",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '189',
                "municipality_name" => "Charta",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '190',
                "municipality_name" => "Chigorodó",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '191',
                "municipality_name" => "Chima",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '192',
                "municipality_name" => "Chimichagua",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '193',
                "municipality_name" => "Chimá",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '194',
                "municipality_name" => "Chinavita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '195',
                "municipality_name" => "Chinchiná",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '196',
                "municipality_name" => "Chinácota",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '197',
                "municipality_name" => "Chinú",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '198',
                "municipality_name" => "Chipaque",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '199',
                "municipality_name" => "Chipatá",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '200',
                "municipality_name" => "Chiquinquirá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '201',
                "municipality_name" => "Chiriguaná",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '202',
                "municipality_name" => "Chiscas",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '203',
                "municipality_name" => "Chita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '204',
                "municipality_name" => "Chitagá",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '205',
                "municipality_name" => "Chitaraque",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '206',
                "municipality_name" => "Chivatá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '207',
                "municipality_name" => "Chivolo",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '208',
                "municipality_name" => "Choachí",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '209',
                "municipality_name" => "Chocontá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '210',
                "municipality_name" => "Chámeza",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '211',
                "municipality_name" => "Chía",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '212',
                "municipality_name" => "Chíquiza",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '213',
                "municipality_name" => "Chívor",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '214',
                "municipality_name" => "Cicuco",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '215',
                "municipality_name" => "Cimitarra",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '216',
                "municipality_name" => "Circasia",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '217',
                "municipality_name" => "Cisneros",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '218',
                "municipality_name" => "Ciénaga",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '219',
                "municipality_name" => "Ciénaga",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '220',
                "municipality_name" => "Ciénaga de Oro",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '221',
                "municipality_name" => "Clemencia",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '222',
                "municipality_name" => "Cocorná",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '223',
                "municipality_name" => "Coello",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '224',
                "municipality_name" => "Cogua",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '225',
                "municipality_name" => "Colombia",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '226',
                "municipality_name" => "Colosó (Ricaurte)",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '227',
                "municipality_name" => "Colón",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '228',
                "municipality_name" => "Colón (Génova)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '229',
                "municipality_name" => "Concepción",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '230',
                "municipality_name" => "Concepción",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '231',
                "municipality_name" => "Concordia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '232',
                "municipality_name" => "Concordia",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '233',
                "municipality_name" => "Condoto",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '234',
                "municipality_name" => "Confines",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '235',
                "municipality_name" => "Consaca",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '236',
                "municipality_name" => "Contadero",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '237',
                "municipality_name" => "Contratación",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '238',
                "municipality_name" => "Convención",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '239',
                "municipality_name" => "Copacabana",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '240',
                "municipality_name" => "Coper",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '241',
                "municipality_name" => "Cordobá",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '242',
                "municipality_name" => "Corinto",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '243',
                "municipality_name" => "Coromoro",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '244',
                "municipality_name" => "Corozal",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '245',
                "municipality_name" => "Corrales",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '246',
                "municipality_name" => "Cota",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '247',
                "municipality_name" => "Cotorra",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '248',
                "municipality_name" => "Covarachía",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '249',
                "municipality_name" => "Coveñas",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '250',
                "municipality_name" => "Coyaima",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '251',
                "municipality_name" => "Cravo Norte",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '252',
                "municipality_name" => "Cuaspud (Carlosama)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '253',
                "municipality_name" => "Cubarral",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '254',
                "municipality_name" => "Cubará",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '255',
                "municipality_name" => "Cucaita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '256',
                "municipality_name" => "Cucunubá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '257',
                "municipality_name" => "Cucutilla",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '258',
                "municipality_name" => "Cuitiva",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '259',
                "municipality_name" => "Cumaral",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '260',
                "municipality_name" => "Cumaribo",
                "department" => '99',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '261',
                "municipality_name" => "Cumbal",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '262',
                "municipality_name" => "Cumbitara",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '263',
                "municipality_name" => "Cunday",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '264',
                "municipality_name" => "Curillo",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '265',
                "municipality_name" => "Curití",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '266',
                "municipality_name" => "Curumaní",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '267',
                "municipality_name" => "Cáceres",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '268',
                "municipality_name" => "Cáchira",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '269',
                "municipality_name" => "Cácota",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '270',
                "municipality_name" => "Cáqueza",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '271',
                "municipality_name" => "Cértegui",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '272',
                "municipality_name" => "Cómbita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '273',
                "municipality_name" => "Córdoba",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '274',
                "municipality_name" => "Córdoba",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '275',
                "municipality_name" => "Cúcuta",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '276',
                "municipality_name" => "Dabeiba",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '277',
                "municipality_name" => "Dagua",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '278',
                "municipality_name" => "Dibulla",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '279',
                "municipality_name" => "Distracción",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '280',
                "municipality_name" => "Dolores",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '281',
                "municipality_name" => "Don Matías",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '282',
                "municipality_name" => "Dos Quebradas",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '283',
                "municipality_name" => "Duitama",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '284',
                "municipality_name" => "Durania",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '285',
                "municipality_name" => "Ebéjico",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '286',
                "municipality_name" => "El Bagre",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '287',
                "municipality_name" => "El Banco",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '288',
                "municipality_name" => "El Cairo",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '289',
                "municipality_name" => "El Calvario",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '290',
                "municipality_name" => "El Carmen",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '291',
                "municipality_name" => "El Carmen",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '292',
                "municipality_name" => "El Carmen de Atrato",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '293',
                "municipality_name" => "El Carmen de Bolívar",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '294',
                "municipality_name" => "El Castillo",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '295',
                "municipality_name" => "El Cerrito",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '296',
                "municipality_name" => "El Charco",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '297',
                "municipality_name" => "El Cocuy",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '298',
                "municipality_name" => "El Colegio",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '299',
                "municipality_name" => "El Copey",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '300',
                "municipality_name" => "El Doncello",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '301',
                "municipality_name" => "El Dorado",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '302',
                "municipality_name" => "El Dovio",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '303',
                "municipality_name" => "El Espino",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '304',
                "municipality_name" => "El Guacamayo",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '305',
                "municipality_name" => "El Guamo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '306',
                "municipality_name" => "El Molino",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '307',
                "municipality_name" => "El Paso",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '308',
                "municipality_name" => "El Paujil",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '309',
                "municipality_name" => "El Peñol",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '310',
                "municipality_name" => "El Peñon",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '311',
                "municipality_name" => "El Peñon",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '312',
                "municipality_name" => "El Peñón",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '313',
                "municipality_name" => "El Piñon",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '314',
                "municipality_name" => "El Playón",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '315',
                "municipality_name" => "El Retorno",
                "department" => '95',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '316',
                "municipality_name" => "El Retén",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '317',
                "municipality_name" => "El Roble",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '318',
                "municipality_name" => "El Rosal",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '319',
                "municipality_name" => "El Rosario",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '320',
                "municipality_name" => "El Tablón de Gómez",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '321',
                "municipality_name" => "El Tambo",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '322',
                "municipality_name" => "El Tambo",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '323',
                "municipality_name" => "El Tarra",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '324',
                "municipality_name" => "El Zulia",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '325',
                "municipality_name" => "El Águila",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '326',
                "municipality_name" => "Elías",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '327',
                "municipality_name" => "Encino",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '328',
                "municipality_name" => "Enciso",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '329',
                "municipality_name" => "Entrerríos",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '330',
                "municipality_name" => "Envigado",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '331',
                "municipality_name" => "Espinal",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '332',
                "municipality_name" => "Facatativá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '333',
                "municipality_name" => "Falan",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '334',
                "municipality_name" => "Filadelfia",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '335',
                "municipality_name" => "Filandia",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '336',
                "municipality_name" => "Firavitoba",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '337',
                "municipality_name" => "Flandes",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '338',
                "municipality_name" => "Florencia",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '339',
                "municipality_name" => "Florencia",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '340',
                "municipality_name" => "Floresta",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '341',
                "municipality_name" => "Florida",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '342',
                "municipality_name" => "Floridablanca",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '343',
                "municipality_name" => "Florián",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '344',
                "municipality_name" => "Fonseca",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '345',
                "municipality_name" => "Fortúl",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '346',
                "municipality_name" => "Fosca",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '347',
                "municipality_name" => "Francisco Pizarro",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '348',
                "municipality_name" => "Fredonia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '349',
                "municipality_name" => "Fresno",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '350',
                "municipality_name" => "Frontino",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '351',
                "municipality_name" => "Fuente de Oro",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '352',
                "municipality_name" => "Fundación",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '353',
                "municipality_name" => "Funes",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '354',
                "municipality_name" => "Funza",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '355',
                "municipality_name" => "Fusagasugá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '356',
                "municipality_name" => "Fómeque",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '357',
                "municipality_name" => "Fúquene",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '358',
                "municipality_name" => "Gachalá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '359',
                "municipality_name" => "Gachancipá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '360',
                "municipality_name" => "Gachantivá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '361',
                "municipality_name" => "Gachetá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '362',
                "municipality_name" => "Galapa",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '363',
                "municipality_name" => "Galeras (Nueva Granada)",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '364',
                "municipality_name" => "Galán",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '365',
                "municipality_name" => "Gama",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '366',
                "municipality_name" => "Gamarra",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '367',
                "municipality_name" => "Garagoa",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '368',
                "municipality_name" => "Garzón",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '369',
                "municipality_name" => "Gigante",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '370',
                "municipality_name" => "Ginebra",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '371',
                "municipality_name" => "Giraldo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '372',
                "municipality_name" => "Girardot",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '373',
                "municipality_name" => "Girardota",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '374',
                "municipality_name" => "Girón",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '375',
                "municipality_name" => "Gonzalez",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '376',
                "municipality_name" => "Gramalote",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '377',
                "municipality_name" => "Granada",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '378',
                "municipality_name" => "Granada",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '379',
                "municipality_name" => "Granada",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '380',
                "municipality_name" => "Guaca",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '381',
                "municipality_name" => "Guacamayas",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '382',
                "municipality_name" => "Guacarí",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '383',
                "municipality_name" => "Guachavés",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '384',
                "municipality_name" => "Guachené",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '385',
                "municipality_name" => "Guachetá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '386',
                "municipality_name" => "Guachucal",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '387',
                "municipality_name" => "Guadalupe",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '388',
                "municipality_name" => "Guadalupe",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '389',
                "municipality_name" => "Guadalupe",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '390',
                "municipality_name" => "Guaduas",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '391',
                "municipality_name" => "Guaitarilla",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '392',
                "municipality_name" => "Gualmatán",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '393',
                "municipality_name" => "Guamal",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '394',
                "municipality_name" => "Guamal",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '395',
                "municipality_name" => "Guamo",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '396',
                "municipality_name" => "Guapota",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '397',
                "municipality_name" => "Guapí",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '398',
                "municipality_name" => "Guaranda",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '399',
                "municipality_name" => "Guarne",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '400',
                "municipality_name" => "Guasca",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '401',
                "municipality_name" => "Guatapé",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '402',
                "municipality_name" => "Guataquí",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '403',
                "municipality_name" => "Guatavita",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '404',
                "municipality_name" => "Guateque",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '405',
                "municipality_name" => "Guavatá",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '406',
                "municipality_name" => "Guayabal de Siquima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '407',
                "municipality_name" => "Guayabetal",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '408',
                "municipality_name" => "Guayatá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '409',
                "municipality_name" => "Guepsa",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '410',
                "municipality_name" => "Guicán",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '411',
                "municipality_name" => "Gutiérrez",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '412',
                "municipality_name" => "Guática",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '413',
                "municipality_name" => "Gámbita",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '414',
                "municipality_name" => "Gámeza",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '415',
                "municipality_name" => "Génova",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '416',
                "municipality_name" => "Gómez Plata",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '417',
                "municipality_name" => "Hacarí",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '418',
                "municipality_name" => "Hatillo de Loba",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '419',
                "municipality_name" => "Hato",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '420',
                "municipality_name" => "Hato Corozal",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '421',
                "municipality_name" => "Hatonuevo",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '422',
                "municipality_name" => "Heliconia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '423',
                "municipality_name" => "Herrán",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '424',
                "municipality_name" => "Herveo",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '425',
                "municipality_name" => "Hispania",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '426',
                "municipality_name" => "Hobo",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '427',
                "municipality_name" => "Honda",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '428',
                "municipality_name" => "Ibagué",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '429',
                "municipality_name" => "Icononzo",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '430',
                "municipality_name" => "Iles",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '431',
                "municipality_name" => "Imúes",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '432',
                "municipality_name" => "Inzá",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '433',
                "municipality_name" => "Inírida",
                "department" => '94',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '434',
                "municipality_name" => "Ipiales",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '435',
                "municipality_name" => "Isnos",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '436',
                "municipality_name" => "Istmina",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '437',
                "municipality_name" => "Itagüí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '438',
                "municipality_name" => "Ituango",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '439',
                "municipality_name" => "Izá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '440',
                "municipality_name" => "Jambaló",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '441',
                "municipality_name" => "Jamundí",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '442',
                "municipality_name" => "Jardín",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '443',
                "municipality_name" => "Jenesano",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '444',
                "municipality_name" => "Jericó",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '445',
                "municipality_name" => "Jericó",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '446',
                "municipality_name" => "Jerusalén",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '447',
                "municipality_name" => "Jesús María",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '448',
                "municipality_name" => "Jordán",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '449',
                "municipality_name" => "Juan de Acosta",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '450',
                "municipality_name" => "Junín",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '451',
                "municipality_name" => "Juradó",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '452',
                "municipality_name" => "La Apartada y La Frontera",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '453',
                "municipality_name" => "La Argentina",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '454',
                "municipality_name" => "La Belleza",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '455',
                "municipality_name" => "La Calera",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '456',
                "municipality_name" => "La Capilla",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '457',
                "municipality_name" => "La Ceja",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '458',
                "municipality_name" => "La Celia",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '459',
                "municipality_name" => "La Cruz",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '460',
                "municipality_name" => "La Cumbre",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '461',
                "municipality_name" => "La Dorada",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '462',
                "municipality_name" => "La Esperanza",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '463',
                "municipality_name" => "La Estrella",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '464',
                "municipality_name" => "La Florida",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '465',
                "municipality_name" => "La Gloria",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '466',
                "municipality_name" => "La Jagua de Ibirico",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '467',
                "municipality_name" => "La Jagua del Pilar",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '468',
                "municipality_name" => "La Llanada",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '469',
                "municipality_name" => "La Macarena",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '470',
                "municipality_name" => "La Merced",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '471',
                "municipality_name" => "La Mesa",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '472',
                "municipality_name" => "La Montañita",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '473',
                "municipality_name" => "La Palma",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '474',
                "municipality_name" => "La Paz",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '475',
                "municipality_name" => "La Paz (Robles)",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '476',
                "municipality_name" => "La Peña",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '477',
                "municipality_name" => "La Pintada",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '478',
                "municipality_name" => "La Plata",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '479',
                "municipality_name" => "La Playa",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '480',
                "municipality_name" => "La Primavera",
                "department" => '99',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '481',
                "municipality_name" => "La Salina",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '482',
                "municipality_name" => "La Sierra",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '483',
                "municipality_name" => "La Tebaida",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '484',
                "municipality_name" => "La Tola",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '485',
                "municipality_name" => "La Unión",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '486',
                "municipality_name" => "La Unión",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '487',
                "municipality_name" => "La Unión",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '488',
                "municipality_name" => "La Unión",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '489',
                "municipality_name" => "La Uvita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '490',
                "municipality_name" => "La Vega",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '491',
                "municipality_name" => "La Vega",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '492',
                "municipality_name" => "La Victoria",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '493',
                "municipality_name" => "La Victoria",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '494',
                "municipality_name" => "La Victoria",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '495',
                "municipality_name" => "La Virginia",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '496',
                "municipality_name" => "Labateca",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '497',
                "municipality_name" => "Labranzagrande",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '498',
                "municipality_name" => "Landázuri",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '499',
                "municipality_name" => "Lebrija",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '500',
                "municipality_name" => "Leiva",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '501',
                "municipality_name" => "Lejanías",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '502',
                "municipality_name" => "Lenguazaque",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '503',
                "municipality_name" => "Leticia",
                "department" => '91',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '504',
                "municipality_name" => "Liborina",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '505',
                "municipality_name" => "Linares",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '506',
                "municipality_name" => "Lloró",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '507',
                "municipality_name" => "Lorica",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '508',
                "municipality_name" => "Los Córdobas",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '509',
                "municipality_name" => "Los Palmitos",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '510',
                "municipality_name" => "Los Patios",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '511',
                "municipality_name" => "Los Santos",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '512',
                "municipality_name" => "Lourdes",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '513',
                "municipality_name" => "Luruaco",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '514',
                "municipality_name" => "Lérida",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '515',
                "municipality_name" => "Líbano",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '516',
                "municipality_name" => "López (Micay)",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '517',
                "municipality_name" => "Macanal",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '518',
                "municipality_name" => "Macaravita",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '519',
                "municipality_name" => "Maceo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '520',
                "municipality_name" => "Machetá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '521',
                "municipality_name" => "Madrid",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '522',
                "municipality_name" => "Magangué",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '523',
                "municipality_name" => "Magüi (Payán)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '524',
                "municipality_name" => "Mahates",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '525',
                "municipality_name" => "Maicao",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '526',
                "municipality_name" => "Majagual",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '527',
                "municipality_name" => "Malambo",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '528',
                "municipality_name" => "Mallama (Piedrancha)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '529',
                "municipality_name" => "Manatí",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '530',
                "municipality_name" => "Manaure",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '531',
                "municipality_name" => "Manaure Balcón del Cesar",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '532',
                "municipality_name" => "Manizales",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '533',
                "municipality_name" => "Manta",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '534',
                "municipality_name" => "Manzanares",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '535',
                "municipality_name" => "Maní",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '536',
                "municipality_name" => "Mapiripan",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '537',
                "municipality_name" => "Margarita",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '538',
                "municipality_name" => "Marinilla",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '539',
                "municipality_name" => "Maripí",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '540',
                "municipality_name" => "Mariquita",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '541',
                "municipality_name" => "Marmato",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '542',
                "municipality_name" => "Marquetalia",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '543',
                "municipality_name" => "Marsella",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '544',
                "municipality_name" => "Marulanda",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '545',
                "municipality_name" => "María la Baja",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '546',
                "municipality_name" => "Matanza",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '547',
                "municipality_name" => "Medellín",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '548',
                "municipality_name" => "Medina",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '549',
                "municipality_name" => "Medio Atrato",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '550',
                "municipality_name" => "Medio Baudó",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '551',
                "municipality_name" => "Medio San Juan (ANDAGOYA)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '552',
                "municipality_name" => "Melgar",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '553',
                "municipality_name" => "Mercaderes",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '554',
                "municipality_name" => "Mesetas",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '555',
                "municipality_name" => "Milán",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '556',
                "municipality_name" => "Miraflores",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '557',
                "municipality_name" => "Miraflores",
                "department" => '95',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '558',
                "municipality_name" => "Miranda",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '559',
                "municipality_name" => "Mistrató",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '560',
                "municipality_name" => "Mitú",
                "department" => '97',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '561',
                "municipality_name" => "Mocoa",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '562',
                "municipality_name" => "Mogotes",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '563',
                "municipality_name" => "Molagavita",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '564',
                "municipality_name" => "Momil",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '565',
                "municipality_name" => "Mompós",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '566',
                "municipality_name" => "Mongua",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '567',
                "municipality_name" => "Monguí",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '568',
                "municipality_name" => "Moniquirá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '569',
                "municipality_name" => "Montebello",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '570',
                "municipality_name" => "Montecristo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '571',
                "municipality_name" => "Montelíbano",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '572',
                "municipality_name" => "Montenegro",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '573',
                "municipality_name" => "Monteria",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '574',
                "municipality_name" => "Monterrey",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '575',
                "municipality_name" => "Morales",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '576',
                "municipality_name" => "Morales",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '577',
                "municipality_name" => "Morelia",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '578',
                "municipality_name" => "Morroa",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '579',
                "municipality_name" => "Mosquera",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '580',
                "municipality_name" => "Mosquera",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '581',
                "municipality_name" => "Motavita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '582',
                "municipality_name" => "Moñitos",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '583',
                "municipality_name" => "Murillo",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '584',
                "municipality_name" => "Murindó",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '585',
                "municipality_name" => "Mutatá",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '586',
                "municipality_name" => "Mutiscua",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '587',
                "municipality_name" => "Muzo",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '588',
                "municipality_name" => "Málaga",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '589',
                "municipality_name" => "Nariño",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '590',
                "municipality_name" => "Nariño",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '591',
                "municipality_name" => "Nariño",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '592',
                "municipality_name" => "Natagaima",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '593',
                "municipality_name" => "Nechí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '594',
                "municipality_name" => "Necoclí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '595',
                "municipality_name" => "Neira",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '596',
                "municipality_name" => "Neiva",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '597',
                "municipality_name" => "Nemocón",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '598',
                "municipality_name" => "Nilo",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '599',
                "municipality_name" => "Nimaima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '600',
                "municipality_name" => "Nobsa",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '601',
                "municipality_name" => "Nocaima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '602',
                "municipality_name" => "Norcasia",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '603',
                "municipality_name" => "Norosí",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '604',
                "municipality_name" => "Novita",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '605',
                "municipality_name" => "Nueva Granada",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '606',
                "municipality_name" => "Nuevo Colón",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '607',
                "municipality_name" => "Nunchía",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '608',
                "municipality_name" => "Nuquí",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '609',
                "municipality_name" => "Nátaga",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '610',
                "municipality_name" => "Obando",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '611',
                "municipality_name" => "Ocamonte",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '612',
                "municipality_name" => "Ocaña",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '613',
                "municipality_name" => "Oiba",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '614',
                "municipality_name" => "Oicatá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '615',
                "municipality_name" => "Olaya",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '616',
                "municipality_name" => "Olaya Herrera",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '617',
                "municipality_name" => "Onzaga",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '618',
                "municipality_name" => "Oporapa",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '619',
                "municipality_name" => "Orito",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '620',
                "municipality_name" => "Orocué",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '621',
                "municipality_name" => "Ortega",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '622',
                "municipality_name" => "Ospina",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '623',
                "municipality_name" => "Otanche",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '624',
                "municipality_name" => "Ovejas",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '625',
                "municipality_name" => "Pachavita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '626',
                "municipality_name" => "Pacho",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '627',
                "municipality_name" => "Padilla",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '628',
                "municipality_name" => "Paicol",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '629',
                "municipality_name" => "Pailitas",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '630',
                "municipality_name" => "Paime",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '631',
                "municipality_name" => "Paipa",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '632',
                "municipality_name" => "Pajarito",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '633',
                "municipality_name" => "Palermo",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '634',
                "municipality_name" => "Palestina",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '635',
                "municipality_name" => "Palestina",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '636',
                "municipality_name" => "Palmar",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '637',
                "municipality_name" => "Palmar de Varela",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '638',
                "municipality_name" => "Palmas del Socorro",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '639',
                "municipality_name" => "Palmira",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '640',
                "municipality_name" => "Palmito",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '641',
                "municipality_name" => "Palocabildo",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '642',
                "municipality_name" => "Pamplona",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '643',
                "municipality_name" => "Pamplonita",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '644',
                "municipality_name" => "Pandi",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '645',
                "municipality_name" => "Panqueba",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '646',
                "municipality_name" => "Paratebueno",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '647',
                "municipality_name" => "Pasca",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '648',
                "municipality_name" => "Patía (El Bordo)",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '649',
                "municipality_name" => "Pauna",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '650',
                "municipality_name" => "Paya",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '651',
                "municipality_name" => "Paz de Ariporo",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '652',
                "municipality_name" => "Paz de Río",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '653',
                "municipality_name" => "Pedraza",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '654',
                "municipality_name" => "Pelaya",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '655',
                "municipality_name" => "Pensilvania",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '656',
                "municipality_name" => "Peque",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '657',
                "municipality_name" => "Pereira",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '658',
                "municipality_name" => "Pesca",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '659',
                "municipality_name" => "Peñol",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '660',
                "municipality_name" => "Piamonte",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '661',
                "municipality_name" => "Pie de Cuesta",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '662',
                "municipality_name" => "Piedras",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '663',
                "municipality_name" => "Piendamó",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '664',
                "municipality_name" => "Pijao",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '665',
                "municipality_name" => "Pijiño",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '666',
                "municipality_name" => "Pinchote",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '667',
                "municipality_name" => "Pinillos",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '668',
                "municipality_name" => "Piojo",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '669',
                "municipality_name" => "Pisva",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '670',
                "municipality_name" => "Pital",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '671',
                "municipality_name" => "Pitalito",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '672',
                "municipality_name" => "Pivijay",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '673',
                "municipality_name" => "Planadas",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '674',
                "municipality_name" => "Planeta Rica",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '675',
                "municipality_name" => "Plato",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '676',
                "municipality_name" => "Policarpa",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '677',
                "municipality_name" => "Polonuevo",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '678',
                "municipality_name" => "Ponedera",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '679',
                "municipality_name" => "Popayán",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '680',
                "municipality_name" => "Pore",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '681',
                "municipality_name" => "Potosí",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '682',
                "municipality_name" => "Pradera",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '683',
                "municipality_name" => "Prado",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '684',
                "municipality_name" => "Providencia",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '685',
                "municipality_name" => "Providencia",
                "department" => '88',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '686',
                "municipality_name" => "Pueblo Bello",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '687',
                "municipality_name" => "Pueblo Nuevo",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '688',
                "municipality_name" => "Pueblo Rico",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '689',
                "municipality_name" => "Pueblorrico",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '690',
                "municipality_name" => "Puebloviejo",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '691',
                "municipality_name" => "Puente Nacional",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '692',
                "municipality_name" => "Puerres",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '693',
                "municipality_name" => "Puerto Asís",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '694',
                "municipality_name" => "Puerto Berrío",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '695',
                "municipality_name" => "Puerto Boyacá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '696',
                "municipality_name" => "Puerto Caicedo",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '697',
                "municipality_name" => "Puerto Carreño",
                "department" => '99',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '698',
                "municipality_name" => "Puerto Colombia",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '699',
                "municipality_name" => "Puerto Concordia",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '700',
                "municipality_name" => "Puerto Escondido",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '701',
                "municipality_name" => "Puerto Gaitán",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '702',
                "municipality_name" => "Puerto Guzmán",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '703',
                "municipality_name" => "Puerto Leguízamo",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '704',
                "municipality_name" => "Puerto Libertador",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '705',
                "municipality_name" => "Puerto Lleras",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '706',
                "municipality_name" => "Puerto López",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '707',
                "municipality_name" => "Puerto Nare",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '708',
                "municipality_name" => "Puerto Nariño",
                "department" => '91',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '709',
                "municipality_name" => "Puerto Parra",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '710',
                "municipality_name" => "Puerto Rico",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '711',
                "municipality_name" => "Puerto Rico",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '712',
                "municipality_name" => "Puerto Rondón",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '713',
                "municipality_name" => "Puerto Salgar",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '714',
                "municipality_name" => "Puerto Santander",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '715',
                "municipality_name" => "Puerto Tejada",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '716',
                "municipality_name" => "Puerto Triunfo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '717',
                "municipality_name" => "Puerto Wilches",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '718',
                "municipality_name" => "Pulí",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '719',
                "municipality_name" => "Pupiales",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '720',
                "municipality_name" => "Puracé (Coconuco)",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '721',
                "municipality_name" => "Purificación",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '722',
                "municipality_name" => "Purísima",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '723',
                "municipality_name" => "Pácora",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '724',
                "municipality_name" => "Páez",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '725',
                "municipality_name" => "Páez (Belalcazar)",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '726',
                "municipality_name" => "Páramo",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '727',
                "municipality_name" => "Quebradanegra",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '728',
                "municipality_name" => "Quetame",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '729',
                "municipality_name" => "Quibdó",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '730',
                "municipality_name" => "Quimbaya",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '731',
                "municipality_name" => "Quinchía",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '732',
                "municipality_name" => "Quipama",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '733',
                "municipality_name" => "Quipile",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '734',
                "municipality_name" => "Ragonvalia",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '735',
                "municipality_name" => "Ramiriquí",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '736',
                "municipality_name" => "Recetor",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '737',
                "municipality_name" => "Regidor",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '738',
                "municipality_name" => "Remedios",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '739',
                "municipality_name" => "Remolino",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '740',
                "municipality_name" => "Repelón",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '741',
                "municipality_name" => "Restrepo",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '742',
                "municipality_name" => "Restrepo",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '743',
                "municipality_name" => "Retiro",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '744',
                "municipality_name" => "Ricaurte",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '745',
                "municipality_name" => "Ricaurte",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '746',
                "municipality_name" => "Rio Negro",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '747',
                "municipality_name" => "Rioblanco",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '748',
                "municipality_name" => "Riofrío",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '749',
                "municipality_name" => "Riohacha",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '750',
                "municipality_name" => "Risaralda",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '751',
                "municipality_name" => "Rivera",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '752',
                "municipality_name" => "Roberto Payán (San José)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '753',
                "municipality_name" => "Roldanillo",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '754',
                "municipality_name" => "Roncesvalles",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '755',
                "municipality_name" => "Rondón",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '756',
                "municipality_name" => "Rosas",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '757',
                "municipality_name" => "Rovira",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '758',
                "municipality_name" => "Ráquira",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '759',
                "municipality_name" => "Río Iró",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '760',
                "municipality_name" => "Río Quito",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '761',
                "municipality_name" => "Río Sucio",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '762',
                "municipality_name" => "Río Viejo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '763',
                "municipality_name" => "Río de oro",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '764',
                "municipality_name" => "Ríonegro",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '765',
                "municipality_name" => "Ríosucio",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '766',
                "municipality_name" => "Sabana de Torres",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '767',
                "municipality_name" => "Sabanagrande",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '768',
                "municipality_name" => "Sabanalarga",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '769',
                "municipality_name" => "Sabanalarga",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '770',
                "municipality_name" => "Sabanalarga",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '771',
                "municipality_name" => "Sabanas de San Angel (SAN ANGE",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '772',
                "municipality_name" => "Sabaneta",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '773',
                "municipality_name" => "Saboyá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '774',
                "municipality_name" => "Sahagún",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '775',
                "municipality_name" => "Saladoblanco",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '776',
                "municipality_name" => "Salamina",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '777',
                "municipality_name" => "Salamina",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '778',
                "municipality_name" => "Salazar",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '779',
                "municipality_name" => "Saldaña",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '780',
                "municipality_name" => "Salento",
                "department" => '63',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '781',
                "municipality_name" => "Salgar",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '782',
                "municipality_name" => "Samacá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '783',
                "municipality_name" => "Samaniego",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '784',
                "municipality_name" => "Samaná",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '785',
                "municipality_name" => "Sampués",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '786',
                "municipality_name" => "San Agustín",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '787',
                "municipality_name" => "San Alberto",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '788',
                "municipality_name" => "San Andrés",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '789',
                "municipality_name" => "San Andrés Sotavento",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '790',
                "municipality_name" => "San Andrés de Cuerquía",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '791',
                "municipality_name" => "San Antero",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '792',
                "municipality_name" => "San Antonio",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '793',
                "municipality_name" => "San Antonio de Tequendama",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '794',
                "municipality_name" => "San Benito",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '795',
                "municipality_name" => "San Benito Abad",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '796',
                "municipality_name" => "San Bernardo",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '797',
                "municipality_name" => "San Bernardo",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '798',
                "municipality_name" => "San Bernardo del Viento",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '799',
                "municipality_name" => "San Calixto",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '800',
                "municipality_name" => "San Carlos",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '801',
                "municipality_name" => "San Carlos",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '802',
                "municipality_name" => "San Carlos de Guaroa",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '803',
                "municipality_name" => "San Cayetano",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '804',
                "municipality_name" => "San Cayetano",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '805',
                "municipality_name" => "San Cristobal",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '806',
                "municipality_name" => "San Diego",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '807',
                "municipality_name" => "San Eduardo",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '808',
                "municipality_name" => "San Estanislao",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '809',
                "municipality_name" => "San Fernando",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '810',
                "municipality_name" => "San Francisco",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '811',
                "municipality_name" => "San Francisco",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '812',
                "municipality_name" => "San Francisco",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '813',
                "municipality_name" => "San Gíl",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '814',
                "municipality_name" => "San Jacinto",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '815',
                "municipality_name" => "San Jacinto del Cauca",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '816',
                "municipality_name" => "San Jerónimo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '817',
                "municipality_name" => "San Joaquín",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '818',
                "municipality_name" => "San José",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '819',
                "municipality_name" => "San José de Miranda",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '820',
                "municipality_name" => "San José de Montaña",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '821',
                "municipality_name" => "San José de Pare",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '822',
                "municipality_name" => "San José de Uré",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '823',
                "municipality_name" => "San José del Fragua",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '824',
                "municipality_name" => "San José del Guaviare",
                "department" => '95',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '825',
                "municipality_name" => "San José del Palmar",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '826',
                "municipality_name" => "San Juan de Arama",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '827',
                "municipality_name" => "San Juan de Betulia",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '828',
                "municipality_name" => "San Juan de Nepomuceno",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '829',
                "municipality_name" => "San Juan de Pasto",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '830',
                "municipality_name" => "San Juan de Río Seco",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '831',
                "municipality_name" => "San Juan de Urabá",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '832',
                "municipality_name" => "San Juan del Cesar",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '833',
                "municipality_name" => "San Juanito",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '834',
                "municipality_name" => "San Lorenzo",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '835',
                "municipality_name" => "San Luis",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '836',
                "municipality_name" => "San Luís",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '837',
                "municipality_name" => "San Luís de Gaceno",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '838',
                "municipality_name" => "San Luís de Palenque",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '839',
                "municipality_name" => "San Marcos",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '840',
                "municipality_name" => "San Martín",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '841',
                "municipality_name" => "San Martín",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '842',
                "municipality_name" => "San Martín de Loba",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '843',
                "municipality_name" => "San Mateo",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '844',
                "municipality_name" => "San Miguel",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '845',
                "municipality_name" => "San Miguel",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '846',
                "municipality_name" => "San Miguel de Sema",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '847',
                "municipality_name" => "San Onofre",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '848',
                "municipality_name" => "San Pablo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '849',
                "municipality_name" => "San Pablo",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '850',
                "municipality_name" => "San Pablo de Borbur",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '851',
                "municipality_name" => "San Pedro",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '852',
                "municipality_name" => "San Pedro",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '853',
                "municipality_name" => "San Pedro",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '854',
                "municipality_name" => "San Pedro de Cartago",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '855',
                "municipality_name" => "San Pedro de Urabá",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '856',
                "municipality_name" => "San Pelayo",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '857',
                "municipality_name" => "San Rafael",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '858',
                "municipality_name" => "San Roque",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '859',
                "municipality_name" => "San Sebastián",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '860',
                "municipality_name" => "San Sebastián de Buenavista",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '861',
                "municipality_name" => "San Vicente",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '862',
                "municipality_name" => "San Vicente del Caguán",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '863',
                "municipality_name" => "San Vicente del Chucurí",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '864',
                "municipality_name" => "San Zenón",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '865',
                "municipality_name" => "Sandoná",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '866',
                "municipality_name" => "Santa Ana",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '867',
                "municipality_name" => "Santa Bárbara",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '868',
                "municipality_name" => "Santa Bárbara",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '869',
                "municipality_name" => "Santa Bárbara (Iscuandé)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '870',
                "municipality_name" => "Santa Bárbara de Pinto",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '871',
                "municipality_name" => "Santa Catalina",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '872',
                "municipality_name" => "Santa Fé de Antioquia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '873',
                "municipality_name" => "Santa Genoveva de Docorodó",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '874',
                "municipality_name" => "Santa Helena del Opón",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '875',
                "municipality_name" => "Santa Isabel",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '876',
                "municipality_name" => "Santa Lucía",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '877',
                "municipality_name" => "Santa Marta",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '878',
                "municipality_name" => "Santa María",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '879',
                "municipality_name" => "Santa María",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '880',
                "municipality_name" => "Santa Rosa",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '881',
                "municipality_name" => "Santa Rosa",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '882',
                "municipality_name" => "Santa Rosa de Cabal",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '883',
                "municipality_name" => "Santa Rosa de Osos",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '884',
                "municipality_name" => "Santa Rosa de Viterbo",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '885',
                "municipality_name" => "Santa Rosa del Sur",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '886',
                "municipality_name" => "Santa Rosalía",
                "department" => '99',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '887',
                "municipality_name" => "Santa Sofía",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '888',
                "municipality_name" => "Santana",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '889',
                "municipality_name" => "Santander de Quilichao",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '890',
                "municipality_name" => "Santiago",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '891',
                "municipality_name" => "Santiago",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '892',
                "municipality_name" => "Santo Domingo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '893',
                "municipality_name" => "Santo Tomás",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '894',
                "municipality_name" => "Santuario",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '895',
                "municipality_name" => "Santuario",
                "department" => '66',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '896',
                "municipality_name" => "Sapuyes",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '897',
                "municipality_name" => "Saravena",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '898',
                "municipality_name" => "Sardinata",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '899',
                "municipality_name" => "Sasaima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '900',
                "municipality_name" => "Sativanorte",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '901',
                "municipality_name" => "Sativasur",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '902',
                "municipality_name" => "Segovia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '903',
                "municipality_name" => "Sesquilé",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '904',
                "municipality_name" => "Sevilla",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '905',
                "municipality_name" => "Siachoque",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '906',
                "municipality_name" => "Sibaté",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '907',
                "municipality_name" => "Sibundoy",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '908',
                "municipality_name" => "Silos",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '909',
                "municipality_name" => "Silvania",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '910',
                "municipality_name" => "Silvia",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '911',
                "municipality_name" => "Simacota",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '912',
                "municipality_name" => "Simijaca",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '913',
                "municipality_name" => "Simití",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '914',
                "municipality_name" => "Sincelejo",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '915',
                "municipality_name" => "Sincé",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '916',
                "municipality_name" => "Sipí",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '917',
                "municipality_name" => "Sitionuevo",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '918',
                "municipality_name" => "Soacha",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '919',
                "municipality_name" => "Soatá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '920',
                "municipality_name" => "Socha",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '921',
                "municipality_name" => "Socorro",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '922',
                "municipality_name" => "Socotá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '923',
                "municipality_name" => "Sogamoso",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '924',
                "municipality_name" => "Solano",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '925',
                "municipality_name" => "Soledad",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '926',
                "municipality_name" => "Solita",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '927',
                "municipality_name" => "Somondoco",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '928',
                "municipality_name" => "Sonsón",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '929',
                "municipality_name" => "Sopetrán",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '930',
                "municipality_name" => "Soplaviento",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '931',
                "municipality_name" => "Sopó",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '932',
                "municipality_name" => "Sora",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '933',
                "municipality_name" => "Soracá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '934',
                "municipality_name" => "Sotaquirá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '935',
                "municipality_name" => "Sotara (Paispamba)",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '936',
                "municipality_name" => "Sotomayor (Los Andes)",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '937',
                "municipality_name" => "Suaita",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '938',
                "municipality_name" => "Suan",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '939',
                "municipality_name" => "Suaza",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '940',
                "municipality_name" => "Subachoque",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '941',
                "municipality_name" => "Sucre",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '942',
                "municipality_name" => "Sucre",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '943',
                "municipality_name" => "Sucre",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '944',
                "municipality_name" => "Suesca",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '945',
                "municipality_name" => "Supatá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '946',
                "municipality_name" => "Supía",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '947',
                "municipality_name" => "Suratá",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '948',
                "municipality_name" => "Susa",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '949',
                "municipality_name" => "Susacón",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '950',
                "municipality_name" => "Sutamarchán",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '951',
                "municipality_name" => "Sutatausa",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '952',
                "municipality_name" => "Sutatenza",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '953',
                "municipality_name" => "Suárez",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '954',
                "municipality_name" => "Suárez",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '955',
                "municipality_name" => "Sácama",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '956',
                "municipality_name" => "Sáchica",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '957',
                "municipality_name" => "Tabio",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '958',
                "municipality_name" => "Tadó",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '959',
                "municipality_name" => "Talaigua Nuevo",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '960',
                "municipality_name" => "Tamalameque",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '961',
                "municipality_name" => "Tame",
                "department" => '81',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '962',
                "municipality_name" => "Taminango",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '963',
                "municipality_name" => "Tangua",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '964',
                "municipality_name" => "Taraira",
                "department" => '97',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '965',
                "municipality_name" => "Tarazá",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '966',
                "municipality_name" => "Tarqui",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '967',
                "municipality_name" => "Tarso",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '968',
                "municipality_name" => "Tasco",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '969',
                "municipality_name" => "Tauramena",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '970',
                "municipality_name" => "Tausa",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '971',
                "municipality_name" => "Tello",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '972',
                "municipality_name" => "Tena",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '973',
                "municipality_name" => "Tenerife",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '974',
                "municipality_name" => "Tenjo",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '975',
                "municipality_name" => "Tenza",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '976',
                "municipality_name" => "Teorama",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '977',
                "municipality_name" => "Teruel",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '978',
                "municipality_name" => "Tesalia",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '979',
                "municipality_name" => "Tibacuy",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '980',
                "municipality_name" => "Tibaná",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '981',
                "municipality_name" => "Tibasosa",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '982',
                "municipality_name" => "Tibirita",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '983',
                "municipality_name" => "Tibú",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '984',
                "municipality_name" => "Tierralta",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '985',
                "municipality_name" => "Timaná",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '986',
                "municipality_name" => "Timbiquí",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '987',
                "municipality_name" => "Timbío",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '988',
                "municipality_name" => "Tinjacá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '989',
                "municipality_name" => "Tipacoque",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '990',
                "municipality_name" => "Tiquisio (Puerto Rico)",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '991',
                "municipality_name" => "Titiribí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '992',
                "municipality_name" => "Toca",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '993',
                "municipality_name" => "Tocaima",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '994',
                "municipality_name" => "Tocancipá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '995',
                "municipality_name" => "Toguí",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '996',
                "municipality_name" => "Toledo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '997',
                "municipality_name" => "Toledo",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '998',
                "municipality_name" => "Tolú",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '999',
                "municipality_name" => "Tolú Viejo",
                "department" => '70',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1000',
                "municipality_name" => "Tona",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1001',
                "municipality_name" => "Topagá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1002',
                "municipality_name" => "Topaipí",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1003',
                "municipality_name" => "Toribío",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1004',
                "municipality_name" => "Toro",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1005',
                "municipality_name" => "Tota",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1006',
                "municipality_name" => "Totoró",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1007',
                "municipality_name" => "Trinidad",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1008',
                "municipality_name" => "Trujillo",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1009',
                "municipality_name" => "Tubará",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1010',
                "municipality_name" => "Tuchín",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1011',
                "municipality_name" => "Tulúa",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1012',
                "municipality_name" => "Tumaco",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1013',
                "municipality_name" => "Tunja",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1014',
                "municipality_name" => "Tunungua",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1015',
                "municipality_name" => "Turbaco",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1016',
                "municipality_name" => "Turbaná",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1017',
                "municipality_name" => "Turbo",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1018',
                "municipality_name" => "Turmequé",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1019',
                "municipality_name" => "Tuta",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1020',
                "municipality_name" => "Tutasá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1021',
                "municipality_name" => "Támara",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1022',
                "municipality_name" => "Támesis",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1023',
                "municipality_name" => "Túquerres",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1024',
                "municipality_name" => "Ubalá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1025',
                "municipality_name" => "Ubaque",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1026',
                "municipality_name" => "Ubaté",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1027',
                "municipality_name" => "Ulloa",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1028',
                "municipality_name" => "Une",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1029',
                "municipality_name" => "Unguía",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1030',
                "municipality_name" => "Unión Panamericana (ÁNIMAS)",
                "department" => '27',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1031',
                "municipality_name" => "Uramita",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1032',
                "municipality_name" => "Uribe",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1033',
                "municipality_name" => "Uribia",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1034',
                "municipality_name" => "Urrao",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1035',
                "municipality_name" => "Urumita",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1036',
                "municipality_name" => "Usiacuri",
                "department" => '8',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1037',
                "municipality_name" => "Valdivia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1038',
                "municipality_name" => "Valencia",
                "department" => '23',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1039',
                "municipality_name" => "Valle de San José",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1040',
                "municipality_name" => "Valle de San Juan",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1041',
                "municipality_name" => "Valle del Guamuez",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1042',
                "municipality_name" => "Valledupar",
                "department" => '20',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1043',
                "municipality_name" => "Valparaiso",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1044',
                "municipality_name" => "Valparaiso",
                "department" => '18',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1045',
                "municipality_name" => "Vegachí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1046',
                "municipality_name" => "Venadillo",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1047',
                "municipality_name" => "Venecia",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1048',
                "municipality_name" => "Venecia (Ospina Pérez)",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1049',
                "municipality_name" => "Ventaquemada",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1050',
                "municipality_name" => "Vergara",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1051',
                "municipality_name" => "Versalles",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1052',
                "municipality_name" => "Vetas",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1053',
                "municipality_name" => "Viani",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1054',
                "municipality_name" => "Vigía del Fuerte",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1055',
                "municipality_name" => "Vijes",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1056',
                "municipality_name" => "Villa Caro",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1057',
                "municipality_name" => "Villa Rica",
                "department" => '19',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1058',
                "municipality_name" => "Villa de Leiva",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1059',
                "municipality_name" => "Villa del Rosario",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1060',
                "municipality_name" => "Villagarzón",
                "department" => '86',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1061',
                "municipality_name" => "Villagómez",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1062',
                "municipality_name" => "Villahermosa",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1063',
                "municipality_name" => "Villamaría",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1064',
                "municipality_name" => "Villanueva",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1065',
                "municipality_name" => "Villanueva",
                "department" => '44',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1066',
                "municipality_name" => "Villanueva",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1067',
                "municipality_name" => "Villanueva",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1068',
                "municipality_name" => "Villapinzón",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1069',
                "municipality_name" => "Villarrica",
                "department" => '73',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1070',
                "municipality_name" => "Villavicencio",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1071',
                "municipality_name" => "Villavieja",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1072',
                "municipality_name" => "Villeta",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1073',
                "municipality_name" => "Viotá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1074',
                "municipality_name" => "Viracachá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1075',
                "municipality_name" => "Vista Hermosa",
                "department" => '50',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1076',
                "municipality_name" => "Viterbo",
                "department" => '17',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1077',
                "municipality_name" => "Vélez",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1078',
                "municipality_name" => "Yacopí",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1079',
                "municipality_name" => "Yacuanquer",
                "department" => '52',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1080',
                "municipality_name" => "Yaguará",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1081',
                "municipality_name" => "Yalí",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1082',
                "municipality_name" => "Yarumal",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1083',
                "municipality_name" => "Yolombó",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1084',
                "municipality_name" => "Yondó (Casabe)",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1085',
                "municipality_name" => "Yopal",
                "department" => '85',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1086',
                "municipality_name" => "Yotoco",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1087',
                "municipality_name" => "Yumbo",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1088',
                "municipality_name" => "Zambrano",
                "department" => '13',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1089',
                "municipality_name" => "Zapatoca",
                "department" => '68',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1090',
                "municipality_name" => "Zapayán (PUNTA DE PIEDRAS)",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1091',
                "municipality_name" => "Zaragoza",
                "department" => '5',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1092',
                "municipality_name" => "Zarzal",
                "department" => '76',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1093',
                "municipality_name" => "Zetaquirá",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1094',
                "municipality_name" => "Zipacón",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1095',
                "municipality_name" => "Zipaquirá",
                "department" => '25',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1096',
                "municipality_name" => "Zona Bananera (PRADO - SEVILLA",
                "department" => '47',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1097',
                "municipality_name" => "Ábrego",
                "department" => '54',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1098',
                "municipality_name" => "Íquira",
                "department" => '41',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1099',
                "municipality_name" => "Úmbita",
                "department" => '15',
                "municipality_status" => '1'        
            ],
            [
                "id_municipality" => '1100',
                "municipality_name" => "Útica",
                "department" => '25',
                "municipality_status" => '1'        
            ]
        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}