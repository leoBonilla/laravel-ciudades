<?php

use Illuminate\Database\Seeder;

class ComunaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comunas')->delete();
        
        \DB::table('comunas')->insert(array (
            0 => 
            array (
                'id_comuna' => 1,
                'comuna' => 'Arica',
                'id_region' => 15,
                'id_provincia' => 1,
            ),
            1 => 
            array (
                'id_comuna' => 2,
                'comuna' => 'Camarones',
                'id_region' => 15,
                'id_provincia' => 1,
            ),
            2 => 
            array (
                'id_comuna' => 3,
                'comuna' => 'Putre',
                'id_region' => 15,
                'id_provincia' => 2,
            ),
            3 => 
            array (
                'id_comuna' => 4,
                'comuna' => 'General Lagos',
                'id_region' => 15,
                'id_provincia' => 2,
            ),
            4 => 
            array (
                'id_comuna' => 5,
                'comuna' => 'Iquique',
                'id_region' => 1,
                'id_provincia' => 3,
            ),
            5 => 
            array (
                'id_comuna' => 6,
                'comuna' => 'Alto Hospicio',
                'id_region' => 1,
                'id_provincia' => 3,
            ),
            6 => 
            array (
                'id_comuna' => 7,
                'comuna' => 'Pozo Almonte',
                'id_region' => 1,
                'id_provincia' => 4,
            ),
            7 => 
            array (
                'id_comuna' => 8,
                'comuna' => 'Camiña',
                'id_region' => 1,
                'id_provincia' => 4,
            ),
            8 => 
            array (
                'id_comuna' => 9,
                'comuna' => 'Colchane',
                'id_region' => 1,
                'id_provincia' => 4,
            ),
            9 => 
            array (
                'id_comuna' => 10,
                'comuna' => 'Huara',
                'id_region' => 1,
                'id_provincia' => 4,
            ),
            10 => 
            array (
                'id_comuna' => 11,
                'comuna' => 'Pica',
                'id_region' => 1,
                'id_provincia' => 4,
            ),
            11 => 
            array (
                'id_comuna' => 12,
                'comuna' => 'Antofagasta',
                'id_region' => 2,
                'id_provincia' => 5,
            ),
            12 => 
            array (
                'id_comuna' => 13,
                'comuna' => 'Mejillones',
                'id_region' => 2,
                'id_provincia' => 5,
            ),
            13 => 
            array (
                'id_comuna' => 14,
                'comuna' => 'Sierra Gorda',
                'id_region' => 2,
                'id_provincia' => 5,
            ),
            14 => 
            array (
                'id_comuna' => 15,
                'comuna' => 'Taltal',
                'id_region' => 2,
                'id_provincia' => 5,
            ),
            15 => 
            array (
                'id_comuna' => 16,
                'comuna' => 'Calama',
                'id_region' => 2,
                'id_provincia' => 6,
            ),
            16 => 
            array (
                'id_comuna' => 17,
                'comuna' => 'Ollagüe',
                'id_region' => 2,
                'id_provincia' => 6,
            ),
            17 => 
            array (
                'id_comuna' => 18,
                'comuna' => 'San Pedro de Atacama',
                'id_region' => 2,
                'id_provincia' => 6,
            ),
            18 => 
            array (
                'id_comuna' => 19,
                'comuna' => 'Tocopilla',
                'id_region' => 2,
                'id_provincia' => 7,
            ),
            19 => 
            array (
                'id_comuna' => 21,
                'comuna' => 'María Elena',
                'id_region' => 2,
                'id_provincia' => 7,
            ),
            20 => 
            array (
                'id_comuna' => 22,
                'comuna' => 'Copiapó',
                'id_region' => 3,
                'id_provincia' => 8,
            ),
            21 => 
            array (
                'id_comuna' => 23,
                'comuna' => 'Caldera',
                'id_region' => 3,
                'id_provincia' => 8,
            ),
            22 => 
            array (
                'id_comuna' => 24,
                'comuna' => 'Tierra Amarilla',
                'id_region' => 3,
                'id_provincia' => 8,
            ),
            23 => 
            array (
                'id_comuna' => 25,
                'comuna' => 'Chañaral',
                'id_region' => 3,
                'id_provincia' => 9,
            ),
            24 => 
            array (
                'id_comuna' => 26,
                'comuna' => 'Diego de Almagro',
                'id_region' => 3,
                'id_provincia' => 9,
            ),
            25 => 
            array (
                'id_comuna' => 27,
                'comuna' => 'Vallenar',
                'id_region' => 3,
                'id_provincia' => 10,
            ),
            26 => 
            array (
                'id_comuna' => 28,
                'comuna' => 'Alto del Carmen',
                'id_region' => 3,
                'id_provincia' => 10,
            ),
            27 => 
            array (
                'id_comuna' => 29,
                'comuna' => 'Freirina',
                'id_region' => 3,
                'id_provincia' => 10,
            ),
            28 => 
            array (
                'id_comuna' => 30,
                'comuna' => 'Huasco',
                'id_region' => 3,
                'id_provincia' => 10,
            ),
            29 => 
            array (
                'id_comuna' => 31,
                'comuna' => 'La Serena',
                'id_region' => 4,
                'id_provincia' => 11,
            ),
            30 => 
            array (
                'id_comuna' => 32,
                'comuna' => 'Coquimbo',
                'id_region' => 4,
                'id_provincia' => 11,
            ),
            31 => 
            array (
                'id_comuna' => 33,
                'comuna' => 'Andacollo',
                'id_region' => 4,
                'id_provincia' => 11,
            ),
            32 => 
            array (
                'id_comuna' => 34,
                'comuna' => 'La Higuera',
                'id_region' => 4,
                'id_provincia' => 11,
            ),
            33 => 
            array (
                'id_comuna' => 35,
                'comuna' => 'Paiguano',
                'id_region' => 4,
                'id_provincia' => 11,
            ),
            34 => 
            array (
                'id_comuna' => 36,
                'comuna' => 'Vicuña',
                'id_region' => 4,
                'id_provincia' => 11,
            ),
            35 => 
            array (
                'id_comuna' => 37,
                'comuna' => 'Illapel',
                'id_region' => 4,
                'id_provincia' => 12,
            ),
            36 => 
            array (
                'id_comuna' => 38,
                'comuna' => 'Canela',
                'id_region' => 4,
                'id_provincia' => 12,
            ),
            37 => 
            array (
                'id_comuna' => 39,
                'comuna' => 'Los Vilos',
                'id_region' => 4,
                'id_provincia' => 12,
            ),
            38 => 
            array (
                'id_comuna' => 40,
                'comuna' => 'Salamanca',
                'id_region' => 4,
                'id_provincia' => 12,
            ),
            39 => 
            array (
                'id_comuna' => 41,
                'comuna' => 'Ovalle',
                'id_region' => 4,
                'id_provincia' => 13,
            ),
            40 => 
            array (
                'id_comuna' => 42,
                'comuna' => 'Combarbalá',
                'id_region' => 4,
                'id_provincia' => 13,
            ),
            41 => 
            array (
                'id_comuna' => 43,
                'comuna' => 'Monte Patria',
                'id_region' => 4,
                'id_provincia' => 13,
            ),
            42 => 
            array (
                'id_comuna' => 44,
                'comuna' => 'Punitaqui',
                'id_region' => 4,
                'id_provincia' => 13,
            ),
            43 => 
            array (
                'id_comuna' => 45,
                'comuna' => 'Río Hurtado',
                'id_region' => 4,
                'id_provincia' => 13,
            ),
            44 => 
            array (
                'id_comuna' => 46,
                'comuna' => 'Valparaíso',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            45 => 
            array (
                'id_comuna' => 47,
                'comuna' => 'Casablanca',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            46 => 
            array (
                'id_comuna' => 48,
                'comuna' => 'Concón',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            47 => 
            array (
                'id_comuna' => 49,
                'comuna' => 'Juan Fernández',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            48 => 
            array (
                'id_comuna' => 50,
                'comuna' => 'Puchuncaví',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            49 => 
            array (
                'id_comuna' => 51,
                'comuna' => 'Quintero',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            50 => 
            array (
                'id_comuna' => 52,
                'comuna' => 'Viña del Mar',
                'id_region' => 5,
                'id_provincia' => 14,
            ),
            51 => 
            array (
                'id_comuna' => 53,
                'comuna' => 'Isla de Pascua',
                'id_region' => 5,
                'id_provincia' => 15,
            ),
            52 => 
            array (
                'id_comuna' => 54,
                'comuna' => 'Los Andes',
                'id_region' => 5,
                'id_provincia' => 16,
            ),
            53 => 
            array (
                'id_comuna' => 55,
                'comuna' => 'Calle Larga',
                'id_region' => 5,
                'id_provincia' => 16,
            ),
            54 => 
            array (
                'id_comuna' => 56,
                'comuna' => 'Rinconada',
                'id_region' => 5,
                'id_provincia' => 16,
            ),
            55 => 
            array (
                'id_comuna' => 57,
                'comuna' => 'San Esteban',
                'id_region' => 5,
                'id_provincia' => 16,
            ),
            56 => 
            array (
                'id_comuna' => 58,
                'comuna' => 'La Ligua',
                'id_region' => 5,
                'id_provincia' => 17,
            ),
            57 => 
            array (
                'id_comuna' => 59,
                'comuna' => 'Cabildo',
                'id_region' => 5,
                'id_provincia' => 17,
            ),
            58 => 
            array (
                'id_comuna' => 60,
                'comuna' => 'Papudo',
                'id_region' => 5,
                'id_provincia' => 17,
            ),
            59 => 
            array (
                'id_comuna' => 61,
                'comuna' => 'Petorca',
                'id_region' => 5,
                'id_provincia' => 17,
            ),
            60 => 
            array (
                'id_comuna' => 62,
                'comuna' => 'Zapallar',
                'id_region' => 5,
                'id_provincia' => 17,
            ),
            61 => 
            array (
                'id_comuna' => 63,
                'comuna' => 'Quillota',
                'id_region' => 5,
                'id_provincia' => 18,
            ),
            62 => 
            array (
                'id_comuna' => 64,
                'comuna' => 'Calera',
                'id_region' => 5,
                'id_provincia' => 18,
            ),
            63 => 
            array (
                'id_comuna' => 65,
                'comuna' => 'Hijuelas',
                'id_region' => 5,
                'id_provincia' => 18,
            ),
            64 => 
            array (
                'id_comuna' => 66,
                'comuna' => 'La Cruz',
                'id_region' => 5,
                'id_provincia' => 18,
            ),
            65 => 
            array (
                'id_comuna' => 67,
                'comuna' => 'Nogales',
                'id_region' => 5,
                'id_provincia' => 18,
            ),
            66 => 
            array (
                'id_comuna' => 68,
                'comuna' => 'San Antonio',
                'id_region' => 5,
                'id_provincia' => 19,
            ),
            67 => 
            array (
                'id_comuna' => 69,
                'comuna' => 'Algarrobo',
                'id_region' => 5,
                'id_provincia' => 19,
            ),
            68 => 
            array (
                'id_comuna' => 70,
                'comuna' => 'Cartagena',
                'id_region' => 5,
                'id_provincia' => 19,
            ),
            69 => 
            array (
                'id_comuna' => 71,
                'comuna' => 'El Quisco',
                'id_region' => 5,
                'id_provincia' => 19,
            ),
            70 => 
            array (
                'id_comuna' => 72,
                'comuna' => 'El Tabo',
                'id_region' => 5,
                'id_provincia' => 19,
            ),
            71 => 
            array (
                'id_comuna' => 73,
                'comuna' => 'Santo Domingo',
                'id_region' => 5,
                'id_provincia' => 19,
            ),
            72 => 
            array (
                'id_comuna' => 74,
                'comuna' => 'San Felipe',
                'id_region' => 5,
                'id_provincia' => 20,
            ),
            73 => 
            array (
                'id_comuna' => 75,
                'comuna' => 'Catemu',
                'id_region' => 5,
                'id_provincia' => 20,
            ),
            74 => 
            array (
                'id_comuna' => 76,
                'comuna' => 'Llaillay',
                'id_region' => 5,
                'id_provincia' => 20,
            ),
            75 => 
            array (
                'id_comuna' => 77,
                'comuna' => 'Panquehue',
                'id_region' => 5,
                'id_provincia' => 20,
            ),
            76 => 
            array (
                'id_comuna' => 78,
                'comuna' => 'Putaendo',
                'id_region' => 5,
                'id_provincia' => 20,
            ),
            77 => 
            array (
                'id_comuna' => 79,
                'comuna' => 'Santa María',
                'id_region' => 5,
                'id_provincia' => 20,
            ),
            78 => 
            array (
                'id_comuna' => 80,
                'comuna' => 'Quilpué',
                'id_region' => 5,
                'id_provincia' => 21,
            ),
            79 => 
            array (
                'id_comuna' => 81,
                'comuna' => 'Limache',
                'id_region' => 5,
                'id_provincia' => 21,
            ),
            80 => 
            array (
                'id_comuna' => 82,
                'comuna' => 'Olmué',
                'id_region' => 5,
                'id_provincia' => 21,
            ),
            81 => 
            array (
                'id_comuna' => 83,
                'comuna' => 'Villa Alemana',
                'id_region' => 5,
                'id_provincia' => 21,
            ),
            82 => 
            array (
                'id_comuna' => 84,
                'comuna' => 'Santiago',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            83 => 
            array (
                'id_comuna' => 85,
                'comuna' => 'Cerrillos',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            84 => 
            array (
                'id_comuna' => 86,
                'comuna' => 'Cerro Navia',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            85 => 
            array (
                'id_comuna' => 87,
                'comuna' => 'Conchalí',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            86 => 
            array (
                'id_comuna' => 88,
                'comuna' => 'El Bosque',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            87 => 
            array (
                'id_comuna' => 89,
                'comuna' => 'Estación Central',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            88 => 
            array (
                'id_comuna' => 90,
                'comuna' => 'Huechuraba',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            89 => 
            array (
                'id_comuna' => 91,
                'comuna' => 'Independencia',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            90 => 
            array (
                'id_comuna' => 92,
                'comuna' => 'La Cisterna',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            91 => 
            array (
                'id_comuna' => 93,
                'comuna' => 'La Florida',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            92 => 
            array (
                'id_comuna' => 94,
                'comuna' => 'La Granja',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            93 => 
            array (
                'id_comuna' => 95,
                'comuna' => 'La Pintana',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            94 => 
            array (
                'id_comuna' => 96,
                'comuna' => 'La Reina',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            95 => 
            array (
                'id_comuna' => 97,
                'comuna' => 'Las Condes',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            96 => 
            array (
                'id_comuna' => 98,
                'comuna' => 'Lo Barnechea',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            97 => 
            array (
                'id_comuna' => 99,
                'comuna' => 'Lo Espejo',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            98 => 
            array (
                'id_comuna' => 100,
                'comuna' => 'Lo Prado',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            99 => 
            array (
                'id_comuna' => 101,
                'comuna' => 'Macul',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            100 => 
            array (
                'id_comuna' => 102,
                'comuna' => 'Maipú',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            101 => 
            array (
                'id_comuna' => 103,
                'comuna' => 'Ñuñoa',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            102 => 
            array (
                'id_comuna' => 104,
                'comuna' => 'Pedro Aguirre Cerda',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            103 => 
            array (
                'id_comuna' => 105,
                'comuna' => 'Peñalolén',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            104 => 
            array (
                'id_comuna' => 106,
                'comuna' => 'Providencia',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            105 => 
            array (
                'id_comuna' => 107,
                'comuna' => 'Pudahuel',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            106 => 
            array (
                'id_comuna' => 108,
                'comuna' => 'Quilicura',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            107 => 
            array (
                'id_comuna' => 109,
                'comuna' => 'Quinta Normal',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            108 => 
            array (
                'id_comuna' => 110,
                'comuna' => 'Recoleta',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            109 => 
            array (
                'id_comuna' => 111,
                'comuna' => 'Renca',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            110 => 
            array (
                'id_comuna' => 112,
                'comuna' => 'San Joaquín',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            111 => 
            array (
                'id_comuna' => 113,
                'comuna' => 'San Miguel',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            112 => 
            array (
                'id_comuna' => 114,
                'comuna' => 'San Ramón',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            113 => 
            array (
                'id_comuna' => 115,
                'comuna' => 'Vitacura',
                'id_region' => 13,
                'id_provincia' => 49,
            ),
            114 => 
            array (
                'id_comuna' => 116,
                'comuna' => 'Puente Alto',
                'id_region' => 13,
                'id_provincia' => 50,
            ),
            115 => 
            array (
                'id_comuna' => 117,
                'comuna' => 'Pirque',
                'id_region' => 13,
                'id_provincia' => 50,
            ),
            116 => 
            array (
                'id_comuna' => 118,
                'comuna' => 'San José de Maipo',
                'id_region' => 13,
                'id_provincia' => 50,
            ),
            117 => 
            array (
                'id_comuna' => 119,
                'comuna' => 'Colina',
                'id_region' => 13,
                'id_provincia' => 51,
            ),
            118 => 
            array (
                'id_comuna' => 120,
                'comuna' => 'Lampa',
                'id_region' => 13,
                'id_provincia' => 51,
            ),
            119 => 
            array (
                'id_comuna' => 121,
                'comuna' => 'Tiltil',
                'id_region' => 13,
                'id_provincia' => 51,
            ),
            120 => 
            array (
                'id_comuna' => 122,
                'comuna' => 'San Bernardo',
                'id_region' => 13,
                'id_provincia' => 52,
            ),
            121 => 
            array (
                'id_comuna' => 123,
                'comuna' => 'Buin',
                'id_region' => 13,
                'id_provincia' => 52,
            ),
            122 => 
            array (
                'id_comuna' => 124,
                'comuna' => 'Calera de Tango',
                'id_region' => 13,
                'id_provincia' => 52,
            ),
            123 => 
            array (
                'id_comuna' => 125,
                'comuna' => 'Paine',
                'id_region' => 13,
                'id_provincia' => 52,
            ),
            124 => 
            array (
                'id_comuna' => 126,
                'comuna' => 'Melipilla',
                'id_region' => 13,
                'id_provincia' => 53,
            ),
            125 => 
            array (
                'id_comuna' => 127,
                'comuna' => 'Alhué',
                'id_region' => 13,
                'id_provincia' => 53,
            ),
            126 => 
            array (
                'id_comuna' => 128,
                'comuna' => 'Curacaví',
                'id_region' => 13,
                'id_provincia' => 53,
            ),
            127 => 
            array (
                'id_comuna' => 129,
                'comuna' => 'María Pinto',
                'id_region' => 13,
                'id_provincia' => 53,
            ),
            128 => 
            array (
                'id_comuna' => 130,
                'comuna' => 'San Pedro',
                'id_region' => 13,
                'id_provincia' => 53,
            ),
            129 => 
            array (
                'id_comuna' => 131,
                'comuna' => 'Talagante',
                'id_region' => 13,
                'id_provincia' => 54,
            ),
            130 => 
            array (
                'id_comuna' => 132,
                'comuna' => 'El Monte',
                'id_region' => 13,
                'id_provincia' => 54,
            ),
            131 => 
            array (
                'id_comuna' => 133,
                'comuna' => 'Isla de Maipo',
                'id_region' => 13,
                'id_provincia' => 54,
            ),
            132 => 
            array (
                'id_comuna' => 134,
                'comuna' => 'Padre Hurtado',
                'id_region' => 13,
                'id_provincia' => 54,
            ),
            133 => 
            array (
                'id_comuna' => 135,
                'comuna' => 'Peñaflor',
                'id_region' => 13,
                'id_provincia' => 54,
            ),
            134 => 
            array (
                'id_comuna' => 136,
                'comuna' => 'Rancagua',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            135 => 
            array (
                'id_comuna' => 137,
                'comuna' => 'Codegua',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            136 => 
            array (
                'id_comuna' => 138,
                'comuna' => 'Coinco',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            137 => 
            array (
                'id_comuna' => 139,
                'comuna' => 'Coltauco',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            138 => 
            array (
                'id_comuna' => 140,
                'comuna' => 'Doñihue',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            139 => 
            array (
                'id_comuna' => 141,
                'comuna' => 'Graneros',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            140 => 
            array (
                'id_comuna' => 142,
                'comuna' => 'Las Cabras',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            141 => 
            array (
                'id_comuna' => 143,
                'comuna' => 'Machalí',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            142 => 
            array (
                'id_comuna' => 144,
                'comuna' => 'Malloa',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            143 => 
            array (
                'id_comuna' => 145,
                'comuna' => 'Mostazal',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            144 => 
            array (
                'id_comuna' => 146,
                'comuna' => 'Olivar',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            145 => 
            array (
                'id_comuna' => 147,
                'comuna' => 'Peumo',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            146 => 
            array (
                'id_comuna' => 148,
                'comuna' => 'Pichidegua',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            147 => 
            array (
                'id_comuna' => 149,
                'comuna' => 'Quinta de Tilcoco',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            148 => 
            array (
                'id_comuna' => 150,
                'comuna' => 'Rengo',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            149 => 
            array (
                'id_comuna' => 151,
                'comuna' => 'Requínoa',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            150 => 
            array (
                'id_comuna' => 152,
                'comuna' => 'San Vicente',
                'id_region' => 6,
                'id_provincia' => 22,
            ),
            151 => 
            array (
                'id_comuna' => 153,
                'comuna' => 'Pichilemu',
                'id_region' => 6,
                'id_provincia' => 23,
            ),
            152 => 
            array (
                'id_comuna' => 154,
                'comuna' => 'La Estrella',
                'id_region' => 6,
                'id_provincia' => 23,
            ),
            153 => 
            array (
                'id_comuna' => 155,
                'comuna' => 'Litueche',
                'id_region' => 6,
                'id_provincia' => 23,
            ),
            154 => 
            array (
                'id_comuna' => 156,
                'comuna' => 'Marchihue',
                'id_region' => 6,
                'id_provincia' => 23,
            ),
            155 => 
            array (
                'id_comuna' => 157,
                'comuna' => 'Navidad',
                'id_region' => 6,
                'id_provincia' => 23,
            ),
            156 => 
            array (
                'id_comuna' => 158,
                'comuna' => 'Paredones',
                'id_region' => 6,
                'id_provincia' => 23,
            ),
            157 => 
            array (
                'id_comuna' => 159,
                'comuna' => 'San Fernando',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            158 => 
            array (
                'id_comuna' => 160,
                'comuna' => 'Chépica',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            159 => 
            array (
                'id_comuna' => 161,
                'comuna' => 'Chimbarongo',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            160 => 
            array (
                'id_comuna' => 162,
                'comuna' => 'Lolol',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            161 => 
            array (
                'id_comuna' => 163,
                'comuna' => 'Nancagua',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            162 => 
            array (
                'id_comuna' => 164,
                'comuna' => 'Palmilla',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            163 => 
            array (
                'id_comuna' => 165,
                'comuna' => 'Peralillo',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            164 => 
            array (
                'id_comuna' => 166,
                'comuna' => 'Placilla',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            165 => 
            array (
                'id_comuna' => 167,
                'comuna' => 'Pumanque',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            166 => 
            array (
                'id_comuna' => 168,
                'comuna' => 'Santa Cruz',
                'id_region' => 6,
                'id_provincia' => 24,
            ),
            167 => 
            array (
                'id_comuna' => 169,
                'comuna' => 'Talca',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            168 => 
            array (
                'id_comuna' => 170,
                'comuna' => 'Constitución',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            169 => 
            array (
                'id_comuna' => 171,
                'comuna' => 'Curepto',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            170 => 
            array (
                'id_comuna' => 172,
                'comuna' => 'Empedrado',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            171 => 
            array (
                'id_comuna' => 173,
                'comuna' => 'Maule',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            172 => 
            array (
                'id_comuna' => 174,
                'comuna' => 'Pelarco',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            173 => 
            array (
                'id_comuna' => 175,
                'comuna' => 'Pencahue',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            174 => 
            array (
                'id_comuna' => 176,
                'comuna' => 'Río Claro',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            175 => 
            array (
                'id_comuna' => 177,
                'comuna' => 'San Clemente',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            176 => 
            array (
                'id_comuna' => 178,
                'comuna' => 'San Rafael',
                'id_region' => 7,
                'id_provincia' => 25,
            ),
            177 => 
            array (
                'id_comuna' => 179,
                'comuna' => 'Cauquenes',
                'id_region' => 7,
                'id_provincia' => 26,
            ),
            178 => 
            array (
                'id_comuna' => 180,
                'comuna' => 'Chanco',
                'id_region' => 7,
                'id_provincia' => 26,
            ),
            179 => 
            array (
                'id_comuna' => 181,
                'comuna' => 'Pelluhue',
                'id_region' => 7,
                'id_provincia' => 26,
            ),
            180 => 
            array (
                'id_comuna' => 182,
                'comuna' => 'Curicó',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            181 => 
            array (
                'id_comuna' => 183,
                'comuna' => 'Hualañé',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            182 => 
            array (
                'id_comuna' => 184,
                'comuna' => 'Licantén',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            183 => 
            array (
                'id_comuna' => 185,
                'comuna' => 'Molina',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            184 => 
            array (
                'id_comuna' => 186,
                'comuna' => 'Rauco',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            185 => 
            array (
                'id_comuna' => 187,
                'comuna' => 'Romeral',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            186 => 
            array (
                'id_comuna' => 188,
                'comuna' => 'Sagrada Familia',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            187 => 
            array (
                'id_comuna' => 189,
                'comuna' => 'Teno',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            188 => 
            array (
                'id_comuna' => 190,
                'comuna' => 'Vichuquén',
                'id_region' => 7,
                'id_provincia' => 27,
            ),
            189 => 
            array (
                'id_comuna' => 191,
                'comuna' => 'Linares',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            190 => 
            array (
                'id_comuna' => 192,
                'comuna' => 'Colbún',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            191 => 
            array (
                'id_comuna' => 193,
                'comuna' => 'Longaví',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            192 => 
            array (
                'id_comuna' => 194,
                'comuna' => 'Parral',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            193 => 
            array (
                'id_comuna' => 195,
                'comuna' => 'Retiro',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            194 => 
            array (
                'id_comuna' => 196,
                'comuna' => 'San Javier',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            195 => 
            array (
                'id_comuna' => 197,
                'comuna' => 'Villa Alegre',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            196 => 
            array (
                'id_comuna' => 198,
                'comuna' => 'Yerbas Buenas',
                'id_region' => 7,
                'id_provincia' => 28,
            ),
            197 => 
            array (
                'id_comuna' => 199,
                'comuna' => 'Concepción',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            198 => 
            array (
                'id_comuna' => 200,
                'comuna' => 'Coronel',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            199 => 
            array (
                'id_comuna' => 201,
                'comuna' => 'Chiguayante',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            200 => 
            array (
                'id_comuna' => 202,
                'comuna' => 'Florida',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            201 => 
            array (
                'id_comuna' => 203,
                'comuna' => 'Hualqui',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            202 => 
            array (
                'id_comuna' => 204,
                'comuna' => 'Lota',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            203 => 
            array (
                'id_comuna' => 205,
                'comuna' => 'Penco',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            204 => 
            array (
                'id_comuna' => 206,
                'comuna' => 'San Pedro de la Paz',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            205 => 
            array (
                'id_comuna' => 207,
                'comuna' => 'Santa Juana',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            206 => 
            array (
                'id_comuna' => 208,
                'comuna' => 'Talcahuano',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            207 => 
            array (
                'id_comuna' => 209,
                'comuna' => 'Tomé',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            208 => 
            array (
                'id_comuna' => 210,
                'comuna' => 'Hualpén',
                'id_region' => 8,
                'id_provincia' => 29,
            ),
            209 => 
            array (
                'id_comuna' => 211,
                'comuna' => 'Lebu',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            210 => 
            array (
                'id_comuna' => 212,
                'comuna' => 'Arauco',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            211 => 
            array (
                'id_comuna' => 213,
                'comuna' => 'Cañete',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            212 => 
            array (
                'id_comuna' => 214,
                'comuna' => 'Contulmo',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            213 => 
            array (
                'id_comuna' => 215,
                'comuna' => 'Curanilahue',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            214 => 
            array (
                'id_comuna' => 216,
                'comuna' => 'Los Álamos',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            215 => 
            array (
                'id_comuna' => 217,
                'comuna' => 'Tirúa',
                'id_region' => 8,
                'id_provincia' => 30,
            ),
            216 => 
            array (
                'id_comuna' => 218,
                'comuna' => 'Los Ángeles',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            217 => 
            array (
                'id_comuna' => 219,
                'comuna' => 'Antuco',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            218 => 
            array (
                'id_comuna' => 220,
                'comuna' => 'Cabrero',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            219 => 
            array (
                'id_comuna' => 221,
                'comuna' => 'Laja',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            220 => 
            array (
                'id_comuna' => 222,
                'comuna' => 'Mulchén',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            221 => 
            array (
                'id_comuna' => 223,
                'comuna' => 'Nacimiento',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            222 => 
            array (
                'id_comuna' => 224,
                'comuna' => 'Negrete',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            223 => 
            array (
                'id_comuna' => 225,
                'comuna' => 'Quilaco',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            224 => 
            array (
                'id_comuna' => 226,
                'comuna' => 'Quilleco',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            225 => 
            array (
                'id_comuna' => 227,
                'comuna' => 'San Rosendo',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            226 => 
            array (
                'id_comuna' => 228,
                'comuna' => 'Santa Bárbara',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            227 => 
            array (
                'id_comuna' => 229,
                'comuna' => 'Tucapel',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            228 => 
            array (
                'id_comuna' => 230,
                'comuna' => 'Yumbel',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            229 => 
            array (
                'id_comuna' => 231,
                'comuna' => 'Alto Biobío',
                'id_region' => 8,
                'id_provincia' => 31,
            ),
            230 => 
            array (
                'id_comuna' => 232,
                'comuna' => 'Chillán',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            231 => 
            array (
                'id_comuna' => 233,
                'comuna' => 'Bulnes',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            232 => 
            array (
                'id_comuna' => 234,
                'comuna' => 'Cobquecura',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            233 => 
            array (
                'id_comuna' => 235,
                'comuna' => 'Coelemu',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            234 => 
            array (
                'id_comuna' => 236,
                'comuna' => 'Coihueco',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            235 => 
            array (
                'id_comuna' => 237,
                'comuna' => 'Chillán Viejo',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            236 => 
            array (
                'id_comuna' => 238,
                'comuna' => 'El Carmen',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            237 => 
            array (
                'id_comuna' => 239,
                'comuna' => 'Ninhue',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            238 => 
            array (
                'id_comuna' => 240,
                'comuna' => 'Ñiquén',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            239 => 
            array (
                'id_comuna' => 241,
                'comuna' => 'Pemuco',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            240 => 
            array (
                'id_comuna' => 242,
                'comuna' => 'Pinto',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            241 => 
            array (
                'id_comuna' => 243,
                'comuna' => 'Portezuelo',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            242 => 
            array (
                'id_comuna' => 244,
                'comuna' => 'Quillón',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            243 => 
            array (
                'id_comuna' => 245,
                'comuna' => 'Quirihue',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            244 => 
            array (
                'id_comuna' => 246,
                'comuna' => 'Ránquil',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            245 => 
            array (
                'id_comuna' => 247,
                'comuna' => 'San Carlos',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            246 => 
            array (
                'id_comuna' => 248,
                'comuna' => 'San Fabián',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            247 => 
            array (
                'id_comuna' => 249,
                'comuna' => 'San Ignacio',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            248 => 
            array (
                'id_comuna' => 250,
                'comuna' => 'San Nicolás',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            249 => 
            array (
                'id_comuna' => 251,
                'comuna' => 'Treguaco',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            250 => 
            array (
                'id_comuna' => 252,
                'comuna' => 'Yungay',
                'id_region' => 8,
                'id_provincia' => 32,
            ),
            251 => 
            array (
                'id_comuna' => 253,
                'comuna' => 'Temuco',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            252 => 
            array (
                'id_comuna' => 254,
                'comuna' => 'Carahue',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            253 => 
            array (
                'id_comuna' => 255,
                'comuna' => 'Cunco',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            254 => 
            array (
                'id_comuna' => 256,
                'comuna' => 'Curarrehue',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            255 => 
            array (
                'id_comuna' => 257,
                'comuna' => 'Freire',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            256 => 
            array (
                'id_comuna' => 258,
                'comuna' => 'Galvarino',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            257 => 
            array (
                'id_comuna' => 259,
                'comuna' => 'Gorbea',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            258 => 
            array (
                'id_comuna' => 260,
                'comuna' => 'Lautaro',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            259 => 
            array (
                'id_comuna' => 261,
                'comuna' => 'Loncoche',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            260 => 
            array (
                'id_comuna' => 262,
                'comuna' => 'Melipeuco',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            261 => 
            array (
                'id_comuna' => 263,
                'comuna' => 'Nueva Imperial',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            262 => 
            array (
                'id_comuna' => 264,
                'comuna' => 'Padre las Casas',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            263 => 
            array (
                'id_comuna' => 265,
                'comuna' => 'Perquenco',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            264 => 
            array (
                'id_comuna' => 266,
                'comuna' => 'Pitrufquén',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            265 => 
            array (
                'id_comuna' => 267,
                'comuna' => 'Pucón',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            266 => 
            array (
                'id_comuna' => 268,
                'comuna' => 'Saavedra',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            267 => 
            array (
                'id_comuna' => 269,
                'comuna' => 'Teodoro Schmidt',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            268 => 
            array (
                'id_comuna' => 270,
                'comuna' => 'Toltén',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            269 => 
            array (
                'id_comuna' => 271,
                'comuna' => 'Vilcún',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            270 => 
            array (
                'id_comuna' => 272,
                'comuna' => 'Villarica',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            271 => 
            array (
                'id_comuna' => 273,
                'comuna' => 'Cholchol',
                'id_region' => 9,
                'id_provincia' => 33,
            ),
            272 => 
            array (
                'id_comuna' => 274,
                'comuna' => 'Angol',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            273 => 
            array (
                'id_comuna' => 275,
                'comuna' => 'Collipulli',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            274 => 
            array (
                'id_comuna' => 276,
                'comuna' => 'Curacautín',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            275 => 
            array (
                'id_comuna' => 277,
                'comuna' => 'Ercilla',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            276 => 
            array (
                'id_comuna' => 278,
                'comuna' => 'Lonquimay',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            277 => 
            array (
                'id_comuna' => 279,
                'comuna' => 'Los Sauces',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            278 => 
            array (
                'id_comuna' => 280,
                'comuna' => 'Lumaco',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            279 => 
            array (
                'id_comuna' => 281,
                'comuna' => 'Purén',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            280 => 
            array (
                'id_comuna' => 282,
                'comuna' => 'Renaico',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            281 => 
            array (
                'id_comuna' => 283,
                'comuna' => 'Traiguén',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            282 => 
            array (
                'id_comuna' => 284,
                'comuna' => 'Victoria',
                'id_region' => 9,
                'id_provincia' => 34,
            ),
            283 => 
            array (
                'id_comuna' => 285,
                'comuna' => 'Valdivia',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            284 => 
            array (
                'id_comuna' => 286,
                'comuna' => 'Corral',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            285 => 
            array (
                'id_comuna' => 287,
                'comuna' => 'Lanco',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            286 => 
            array (
                'id_comuna' => 288,
                'comuna' => 'Los Lagos',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            287 => 
            array (
                'id_comuna' => 289,
                'comuna' => 'Máfil',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            288 => 
            array (
                'id_comuna' => 290,
                'comuna' => 'Mariquina',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            289 => 
            array (
                'id_comuna' => 291,
                'comuna' => 'Paillaco',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            290 => 
            array (
                'id_comuna' => 292,
                'comuna' => 'Panguipulli',
                'id_region' => 14,
                'id_provincia' => 35,
            ),
            291 => 
            array (
                'id_comuna' => 293,
                'comuna' => 'La Unión',
                'id_region' => 14,
                'id_provincia' => 36,
            ),
            292 => 
            array (
                'id_comuna' => 294,
                'comuna' => 'Futrono',
                'id_region' => 14,
                'id_provincia' => 36,
            ),
            293 => 
            array (
                'id_comuna' => 295,
                'comuna' => 'Lago Ranco',
                'id_region' => 14,
                'id_provincia' => 36,
            ),
            294 => 
            array (
                'id_comuna' => 296,
                'comuna' => 'Río Bueno',
                'id_region' => 14,
                'id_provincia' => 36,
            ),
            295 => 
            array (
                'id_comuna' => 297,
                'comuna' => 'Puerto Montt',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            296 => 
            array (
                'id_comuna' => 298,
                'comuna' => 'Calbuco',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            297 => 
            array (
                'id_comuna' => 299,
                'comuna' => 'Cochamó',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            298 => 
            array (
                'id_comuna' => 300,
                'comuna' => 'Fresia',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            299 => 
            array (
                'id_comuna' => 301,
                'comuna' => 'Frutillar',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            300 => 
            array (
                'id_comuna' => 302,
                'comuna' => 'Los Muermos',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            301 => 
            array (
                'id_comuna' => 303,
                'comuna' => 'Llanquihue',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            302 => 
            array (
                'id_comuna' => 304,
                'comuna' => 'Maullín',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            303 => 
            array (
                'id_comuna' => 305,
                'comuna' => 'Puerto Varas',
                'id_region' => 10,
                'id_provincia' => 37,
            ),
            304 => 
            array (
                'id_comuna' => 306,
                'comuna' => 'Castro',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            305 => 
            array (
                'id_comuna' => 307,
                'comuna' => 'Ancud',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            306 => 
            array (
                'id_comuna' => 308,
                'comuna' => 'Chonchi',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            307 => 
            array (
                'id_comuna' => 309,
                'comuna' => 'Curaco de Vélez',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            308 => 
            array (
                'id_comuna' => 310,
                'comuna' => 'Dalcahue',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            309 => 
            array (
                'id_comuna' => 311,
                'comuna' => 'Puqueldón',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            310 => 
            array (
                'id_comuna' => 312,
                'comuna' => 'Queilén',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            311 => 
            array (
                'id_comuna' => 313,
                'comuna' => 'Quellón',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            312 => 
            array (
                'id_comuna' => 314,
                'comuna' => 'Quemchi',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            313 => 
            array (
                'id_comuna' => 315,
                'comuna' => 'Quinchao',
                'id_region' => 10,
                'id_provincia' => 38,
            ),
            314 => 
            array (
                'id_comuna' => 316,
                'comuna' => 'Osorno',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            315 => 
            array (
                'id_comuna' => 317,
                'comuna' => 'Puerto Octay',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            316 => 
            array (
                'id_comuna' => 318,
                'comuna' => 'Purranque',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            317 => 
            array (
                'id_comuna' => 319,
                'comuna' => 'Peyehue',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            318 => 
            array (
                'id_comuna' => 320,
                'comuna' => 'Río Negro',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            319 => 
            array (
                'id_comuna' => 321,
                'comuna' => 'San Juan de la Costa',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            320 => 
            array (
                'id_comuna' => 322,
                'comuna' => 'San Pablo',
                'id_region' => 10,
                'id_provincia' => 39,
            ),
            321 => 
            array (
                'id_comuna' => 323,
                'comuna' => 'Chaitén',
                'id_region' => 10,
                'id_provincia' => 40,
            ),
            322 => 
            array (
                'id_comuna' => 324,
                'comuna' => 'Futaleufú',
                'id_region' => 10,
                'id_provincia' => 40,
            ),
            323 => 
            array (
                'id_comuna' => 325,
                'comuna' => 'Hualaihué',
                'id_region' => 10,
                'id_provincia' => 40,
            ),
            324 => 
            array (
                'id_comuna' => 326,
                'comuna' => 'Palena',
                'id_region' => 10,
                'id_provincia' => 40,
            ),
            325 => 
            array (
                'id_comuna' => 327,
                'comuna' => 'Coyhaique',
                'id_region' => 11,
                'id_provincia' => 41,
            ),
            326 => 
            array (
                'id_comuna' => 328,
                'comuna' => 'Lago Verde',
                'id_region' => 11,
                'id_provincia' => 41,
            ),
            327 => 
            array (
                'id_comuna' => 329,
                'comuna' => 'Aysén',
                'id_region' => 11,
                'id_provincia' => 42,
            ),
            328 => 
            array (
                'id_comuna' => 330,
                'comuna' => 'Cisnes',
                'id_region' => 11,
                'id_provincia' => 42,
            ),
            329 => 
            array (
                'id_comuna' => 331,
                'comuna' => 'Guaitecas',
                'id_region' => 11,
                'id_provincia' => 42,
            ),
            330 => 
            array (
                'id_comuna' => 332,
                'comuna' => 'Cochrane',
                'id_region' => 11,
                'id_provincia' => 43,
            ),
            331 => 
            array (
                'id_comuna' => 333,
                'comuna' => 'O\'Higgins',
                'id_region' => 11,
                'id_provincia' => 43,
            ),
            332 => 
            array (
                'id_comuna' => 334,
                'comuna' => 'Tortel',
                'id_region' => 11,
                'id_provincia' => 43,
            ),
            333 => 
            array (
                'id_comuna' => 335,
                'comuna' => 'Chile Chico',
                'id_region' => 11,
                'id_provincia' => 44,
            ),
            334 => 
            array (
                'id_comuna' => 336,
                'comuna' => 'Río Ibáñez',
                'id_region' => 11,
                'id_provincia' => 44,
            ),
            335 => 
            array (
                'id_comuna' => 337,
                'comuna' => 'Punta Arenas',
                'id_region' => 12,
                'id_provincia' => 45,
            ),
            336 => 
            array (
                'id_comuna' => 338,
                'comuna' => 'Laguna Blanca',
                'id_region' => 12,
                'id_provincia' => 45,
            ),
            337 => 
            array (
                'id_comuna' => 339,
                'comuna' => 'Río Verde',
                'id_region' => 12,
                'id_provincia' => 45,
            ),
            338 => 
            array (
                'id_comuna' => 340,
                'comuna' => 'San Gregorio',
                'id_region' => 12,
                'id_provincia' => 45,
            ),
            339 => 
            array (
                'id_comuna' => 341,
                'comuna' => 'Cabo de Hornos',
                'id_region' => 12,
                'id_provincia' => 46,
            ),
            340 => 
            array (
                'id_comuna' => 342,
                'comuna' => 'Antártica',
                'id_region' => 12,
                'id_provincia' => 46,
            ),
            341 => 
            array (
                'id_comuna' => 343,
                'comuna' => 'Porvenir',
                'id_region' => 12,
                'id_provincia' => 47,
            ),
            342 => 
            array (
                'id_comuna' => 344,
                'comuna' => 'Primavera',
                'id_region' => 12,
                'id_provincia' => 47,
            ),
            343 => 
            array (
                'id_comuna' => 345,
                'comuna' => 'Timaukel',
                'id_region' => 12,
                'id_provincia' => 47,
            ),
            344 => 
            array (
                'id_comuna' => 346,
                'comuna' => 'Natales',
                'id_region' => 12,
                'id_provincia' => 48,
            ),
            345 => 
            array (
                'id_comuna' => 347,
                'comuna' => 'Torres del Paine',
                'id_region' => 12,
                'id_provincia' => 48,
            ),
        ));
        
        
    }
}