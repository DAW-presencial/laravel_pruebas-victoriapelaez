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
            'nombre' => $this->faker->text(20),
            'apellido' => $this->faker->text(20),
            'telefono' => $this->faker->text(9),
            'email' => $this->faker->safeEmail,
            'edad'=> $this->faker->numberBetween(15, 80),
            'nacimiento'=> $this->faker->date,
            'idioma'=> 'espanol',
            'descripcion'=> $this->faker->boolean,
            'color'=> 'red',
            'user_id'=> $this->faker->numberBetween(1,3)
        ];
    }

}
