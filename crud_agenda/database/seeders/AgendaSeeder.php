<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agenda')->insert([
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'teléfono'=> Str::random(9),
            'email' => Str::random(10).'@gmail.com',
        ]);
        DB::table('agenda')->insert([
            'nombre' => 'Victoria',
            'apellido' => 'Peláez',
            'teléfono'=> '000000000',
            'email' => 'victoria@gmail.com',
        ]);
    }
}
