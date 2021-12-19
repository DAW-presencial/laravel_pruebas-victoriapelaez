<?php

namespace Database\Seeders;

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
        //si quiero llamar mas seeders los pondria entre [PaisesSeeder::class,LanguageSeeder::class]
        $this->call(PaisesSeeder::class);
    }
}
