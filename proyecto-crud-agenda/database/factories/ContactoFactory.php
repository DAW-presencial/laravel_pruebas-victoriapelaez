<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contacto::class;

    public function definition()
    {
        return [
//            'foto'=>$this->faker->image('storage', 50, 50, 'cats', true, true),
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'telefono' => '000000000',
            'email' => $this->faker->safeEmail,
            'edad'=> $this->faker->numberBetween(15, 80),
            'nacimiento'=> $this->faker->date,
            'idioma'=> 'espanol',
            'descripcion'=> $this->faker->text(20),
            'color'=>'rojo',
            'user_id'=> $this->faker->numberBetween(2,3)
        ];
    }

}
