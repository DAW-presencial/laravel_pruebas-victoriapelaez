<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('agenda')->insert([

            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'teléfono'=> Str::random(9),
            'email' => Str::random(10).'@gmail.com',
        ]);*/
        $contactos = [
            [
                'nombre' => 'Victoria',
                'apellido' => 'Peláez',
                'telefono' => '000000000',
                'email' => 'victoria@gmail.com',
                'foto' => 'uploads/user.png'
            ], [
                'nombre' => 'Patricia',
                'apellido' => 'Peláez',
                'telefono' => '111111111',
                'email' => 'patricia@gmail.com',
                'foto' => 'uploads/user.png'
            ], [
                'nombre' => 'Ramón',
                'apellido' => 'Peláez',
                'telefono' => '222222222',
                'email' => 'ramon@gmail.com',
                'foto' => 'uploads/user.png'
            ],
        ];
        DB::table('contacto')->insert($contactos);
        /*DB::table('agenda')->insert(
            [
            'nombre' => 'Victoria',
            'apellido' => 'Peláez',
            'telefono'=> '000000000',
            'email' => 'victoria@gmail.com',
            'foto' => 'user.jpg'
        ],
            );*/
    }
}
