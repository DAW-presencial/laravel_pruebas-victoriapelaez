<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apiprueba extends Model
{
    use HasFactory;
    protected $table = 'contactos';

    protected $fillable = [
        'foto',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'edad',
        'nacimiento',
        'idioma',
        'descripcion',
        'color',
        'privacidad',
        'user_id'
    ];
}
