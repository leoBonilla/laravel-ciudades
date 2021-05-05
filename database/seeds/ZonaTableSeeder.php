<?php

use Illuminate\Database\Seeder;

class ZonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('zonas')->delete();
        $zonas = [
			['id_zona' => 1, 'zona' =>'Norte'],
			['id_zona' => 2, 'zona' =>'Centro'],
			['id_zona' => 3, 'zona' =>'Sur'],
        ];
        DB::table('zonas')->insert($zonas);
    }
}
