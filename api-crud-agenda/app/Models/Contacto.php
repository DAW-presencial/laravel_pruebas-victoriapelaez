<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
    use HasFactory;
    use SoftDeletes;

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
    /*protected $guarded = [
        'id'
    ];*/

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
