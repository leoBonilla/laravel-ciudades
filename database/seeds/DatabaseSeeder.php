<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ZonaTableSeeder::class,
            RegionTableSeeder::class,
            ProvinciaTableSeeder::class,
            ComunaTableSeeder::class,
            DireccionTableSeeder::class,

        ]);
        
    }
}
