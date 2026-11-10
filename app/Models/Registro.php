<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro';
    public $timestamps = false;

    protected $fillable = [
        'usuario',
        'correo',
        'apellido',
        'nombre',
        'estado',
        'pais',
        'institucion',
        'uso',
        'contrasena',
    ];
}
