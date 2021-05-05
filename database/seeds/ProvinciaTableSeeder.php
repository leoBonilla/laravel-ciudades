<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	\DB::table('provincias')->delete();
        $provincia = [
			['id_provincia' =>1,'provincia' =>"Arica", 'id_region' => 15 ,'codigo'=>"151"],
     		['id_provincia' =>2,'provincia' =>"Parinacota", 'id_region' => 15,'codigo'=>"152"],
			['id_provincia' =>3,'provincia' =>"Iquique" ,'id_region' => 1 ,'codigo'=>"011"],
			['id_provincia' =>4,'provincia' =>"Tamarugal" , 'id_region' => 1 ,'codigo'=>"014"],
			['id_provincia' =>5,'provincia' =>"Antofagasta", 'id_region' => 2 ,'codigo'=>"022"],
			['id_provincia' =>6,'provincia' => "El Loa"   , 'id_region' => 2  , 'codigo'=>"022"],
			['id_provincia' =>7,'provincia' => "Tocopilla" ,'id_region' => 2 ,  'codigo'=>"023"],
			['id_provincia' =>8, 'provincia' =>"Copiapó"  , 'id_region' => 3  , 'codigo'=>"031"],
			['id_provincia' =>9, 'provincia' =>"Chañaral" , 'id_region' => 3 ,  'codigo'=>"032"],
			['id_provincia' =>10,'provincia' =>"Huasco"   , 'id_region' => 3 ,  'codigo'=>"033"], 
			['id_provincia' =>11,'provincia' =>"Elqui" ,'id_region' => 4  , 'codigo'=>"041"],
			['id_provincia' =>12,'provincia' =>"Choapa"    ,'id_region' => 4  , 'codigo'=>"042"],
			['id_provincia' =>13,'provincia' =>"Limarí"    ,'id_region' => 4   ,'codigo'=>"043"],
			['id_provincia' =>14,'provincia' =>"Valparaiso",'id_region' => 5,'codigo'=>"051"],
			['id_provincia' =>15,'provincia' =>"Isla de Pascua",'id_region' => 5,'codigo'=>"052"],
			['id_provincia' =>16,'provincia' =>"Los Andes",'id_region' => 5,'codigo'=>"053"],
			['id_provincia' =>17,'provincia' =>"Petorca",'id_region' => 5,'codigo'=>"054"],
			['id_provincia' =>18,'provincia' =>"Quillota",'id_region' => 5,'codigo'=>"055"],
			['id_provincia' =>19,'provincia' =>"San Antonio" ,'id_region' => 5 ,'codigo'=>"056"],
			['id_provincia' =>20,'provincia' =>"San Felipe de Aconcagua"  , 'id_region' => 5 ,  'codigo'=>"057"], 
			['id_provincia' =>21,'provincia' =>"Marga Marga",   'id_region' => 5  , 'codigo'=>"058"], 

			['id_provincia' =>22, 'provincia' => "Cachapoal", 'id_region' => 6,'codigo'=>"061"],
			['id_provincia' =>23, 'provincia' => "Cardenal Caro", 'id_region' => 6, 'codigo'=>"062"],
			['id_provincia' =>24, 'provincia' => "Colchagua" ,'id_region' => 6, 'codigo'=>"063"],
			['id_provincia' =>25, 'provincia' => "Talca", 'id_region' => 7, 'codigo'=>"071"],  
			['id_provincia' =>26, 'provincia' => "Cauquenes" ,'id_region' => 7,'codigo'=>"072"],
			['id_provincia' =>27, 'provincia' => "Curicó"  ,  'id_region' => 7   ,'codigo'=>"073"],
			['id_provincia' =>28, 'provincia' => "Linares" ,  'id_region' => 7  , 'codigo'=>"074"],
			['id_provincia' =>29, 'provincia' =>   "Concepción"    ,'id_region'=> 8   ,'codigo'=>"081"],
			['id_provincia' =>30, 'provincia' =>   "Arauco" ,'id_region'=> 8 ,'codigo'=>"082"], 
			['id_provincia' =>31, 'provincia' =>   "Biobío" , 'id_region'=>8 ,'codigo' =>"083"],
			['id_provincia' =>32, 'provincia' =>   "Ñuble" ,'id_region'=>8 ,'codigo' =>"084"],
			['id_provincia' =>33, 'provincia' =>   "Cautín" , 'id_region'=>9 ,'codigo' =>"091"],
			['id_provincia' =>34, 'provincia' =>   "Malleco"  , 'id_region'=>9  , 'codigo' =>"092"],
			['id_provincia' =>35, 'provincia' =>   "Valdivia" , 'id_region'=>14 ,'codigo' =>"141"],
			['id_provincia' =>36, 'provincia' => "Ranco" ,'id_region'=>14  ,'codigo' =>"142"],
			['id_provincia' =>37, 'provincia' => "Llanquihue"    ,'id_region'=>10  ,'codigo' =>"101"],
			['id_provincia' => 38,'provincia' =>  "Chiloé"    ,'id_region'=>10  ,'codigo' =>"102"],
			['id_provincia' => 39,'provincia' =>  "Osorno"    ,'id_region'=>10  ,'codigo' =>"103"],
			['id_provincia' => 40,'provincia' =>  "Palena"    ,'id_region'=>10  ,'codigo' =>"104"],
			['id_provincia' => 41,'provincia' =>  "Coihaique" ,'id_region'=>11  ,'codigo' =>"111"],
			['id_provincia' => 42,'provincia' =>  "Aisén" ,'id_region' => 11  ,'codigo' => "112"],
			['id_provincia' => 43,'provincia' =>  "Capitán Prat"  ,'id_region' => 11  ,'codigo' => "113"],
			['id_provincia' => 44,'provincia' =>  "General Carrera "  ,'id_region' => 11  ,'codigo' => "114"],
			['id_provincia' => 45,'provincia' =>  "Magallanes"    ,'id_region' => 12  ,'codigo' => "121"],
			['id_provincia' => 46,'provincia' =>  "Antártica Chilena" ,'id_region' => 12  ,'codigo' => "122"],
			['id_provincia' => 47,'provincia' =>  "Tierra del Fuego"  ,'id_region' => 12  ,'codigo' => "123"],
			['id_provincia' => 48,'provincia' =>  "Última Esperanza"  ,'id_region' => 12  ,'codigo' => "124"],
			['id_provincia' => 49,'provincia' =>  "Santiago"  ,'id_region' => 13  ,'codigo' => "131"],
			['id_provincia' => 50, 'provincia' => "Cordillera"    ,'id_region' => 13  ,'codigo' => "132"],
			['id_provincia' => 51, 'provincia' => "Chacabuco" ,'id_region' => 13  ,'codigo' => "133"],
			['id_provincia' => 52, 'provincia' => "Maipo" ,'id_region' => 13  ,'codigo' => "134"],
			['id_provincia' => 53, 'provincia' => "Melipilla" ,'id_region' => 13  ,'codigo' => "135"],
			['id_provincia' => 54, 'provincia' => "Talagante" ,'id_region' => 13  ,'codigo' => "136"],
			
        ];
        DB::table('provincias')->insert($provincia);
    }
}
