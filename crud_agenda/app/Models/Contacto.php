<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $fillable = [
        'nombre',
        'apellido',
        'teléfono',
        'email',
    ];

    //protected $fillable = ['','',''];
    //fillable es:
    //listado de campos a rellenar en la tabla en asignacion masiva
    //si en la request recibe + campos no los tendrá en cuenta
    // esto es necesario, porqué en la request está el token y este dato no se inserta en la db
    // lo que provoca un error
    public static function paginate()
    {

    }

    /**
     * En caso de que tengamos un formulario con muchos campos,
     * se podría utilizar la siguiente propiedad para indicar los campos protegidos,
     * que no deben insertarse en db, es lo contrario a $fillable.
     *
     */
    //protected $guarded = [];

    // si tuviese relaciones con otras tablas deberia escribir aqui
    /*public function propiedades(){
        return $this->hasMany(Propiedad::class);aqui se añadiria como segundo argumento la tabla intermedia(pivote),
    y las claves ajenas
    belongsToMany mucho a muchos
    hasMany uno a muchos
    belongsTo para campo fijo

    }*/
}
