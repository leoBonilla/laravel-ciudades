<?php

use Illuminate\Database\Seeder;
use Faker\Generator;

class DireccionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('direcciones')->delete();
        $faker = Faker\Factory::create('es_ES');
        
        for ($i=0; $i < 5000 ; $i++) { 
            \DB::table('direcciones')->insert(
            array (
                'id' => $i+1,
                'calle' => $faker->randomElement(array ('Calle','Pasaje','Avenida'))  .' '.$faker->streetName  ,
                'numero' => $faker->buildingNumber,
                'depto' => $faker->optional()->numberBetween($min = 1, $max = 2000),
                'id_comuna' => $faker->numberBetween($min = 1, $max = 347),
                'referencia' => $faker->latitude($min = -90, $max = 90).' , '.$faker->longitude($min = -180, $max = 180),
                'codigo_postal' => $faker->postcode
            ));
        }
        
        
    }
}