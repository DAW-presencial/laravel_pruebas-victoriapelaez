<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactos = [
            [
                'nombre' => 'Victoria',
                'apellido' => 'Peláez',
                'telefono' => '000000000',
                'email' => 'victoria@gmail.com'
            ], [
                'nombre' => 'Patricia',
                'apellido' => 'Peláez',
                'telefono' => '111111111',
                'email' => 'patricia@gmail.com'
            ], [
                'nombre' => 'Ramón',
                'apellido' => 'Peláez',
                'telefono' => '222222222',
                'email' => 'ramon@gmail.com'
            ],
        ];
        DB::table('contactos')->insert($contactos);
    }
}
