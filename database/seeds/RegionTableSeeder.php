<?php

use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('regiones')->delete();
        $regiones = [

            
			['id_region' => 1,'region'=>'I - Región de Tarapacá','id_zona'=>1],
			['id_region' => 2,'region'=>'II - Región de Antofagasta','id_zona'=>1],
			['id_region' => 3,'region'=>'III - Región de Atacama','id_zona'=>1],
			['id_region' => 4,'region'=>'IV - Región de Coquimbo','id_zona'=>1],
			['id_region' => 5,'region'=>'V - Región de Valparaíso','id_zona'=>2],
			['id_region' => 6,'region'=>"VI - Región de O'Higgins",'id_zona'=>2],
			['id_region' => 7,'region'=>'VII - Región de Maule','id_zona'=>2],
			['id_region' => 8,'region'=>'VIII - Región del Biobío','id_zona'=>2],
			['id_region' => 9,'region'=>'IX - Región de la Araucanía','id_zona'=>3],
            ['id_region' => 14,'region'=>'XIV - Región de los Ríos', 'id_zona'=>3],
			['id_region' => 10,'region'=>'X - Región de los Lagos','id_zona'=>3],
			['id_region' => 11,'region'=>'XI - Región de Aysén del General Carlos Ibáñez del Campo','id_zona'=>3],
			['id_region' => 12,'region'=>'XII - Región de Magallanes y la Antártica Chilena','id_zona'=>3],
			['id_region' => 13,'region'=>'RM - Región Metropolitana','id_zona'=>2],
            ['id_region' => 15,'region'=>'XV - Región de Arica y Parinacota','id_zona'=>1],
            ['id_region' => 16,'region'=>'XVI - Región del Ñuble','id_zona'=>2],
			
			
        ];
        DB::table('regiones')->insert($regiones);
    }
}
