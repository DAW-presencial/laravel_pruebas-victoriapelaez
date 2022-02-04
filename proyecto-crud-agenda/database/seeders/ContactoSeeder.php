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
                'email' => 'victoria@gmail.com',
                'edad'=>'34',
                'nacimiento'=>'1988/01/13',
                'idioma'=>'espanol',
                'color'=>'rojo',
                'user_id'=>'1'

            ], [
                'nombre' => 'Patricia',
                'apellido' => 'Peláez',
                'telefono' => '111111111',
                'email' => 'patricia@gmail.com',
                'edad'=>'40',
                'nacimiento'=>'1981/08/10',
                'idioma'=>'espanol',
                'color'=>'amarillo',
                'user_id'=>'1'
            ], [
                'nombre' => 'Ramón',
                'apellido' => 'Peláez',
                'telefono' => '222222222',
                'email' => 'ramon@gmail.com',
                'edad'=>'67',
                'nacimiento'=>'1955/10/13',
                'idioma'=>'espanol',
                'color'=>'azul',
                'user_id'=>'2'
            ],
            [
                'nombre' => 'Joan',
                'apellido' => 'Rebassa',
                'telefono' => '333333333',
                'email' => 'joan@gmail.com',
                'edad'=>'33',
                'nacimiento'=>'1988/11/13',
                'idioma'=>'espanol',
                'color'=>'verde',
                'user_id'=>'2'
            ],
            [
                'nombre' => 'Carmen',
                'apellido' => 'Lozano',
                'telefono' => '444444444',
                'email' => 'carmen@gmail.com',
                'edad'=>'63',
                'nacimiento'=>'1959/09/23',
                'idioma'=>'espanol',
                'color'=>'rojo',
                'user_id'=>'1'
            ],
        ];
        DB::table('contactos')->insert($contactos);
    }
}
