<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactoSiagro extends Model
{
    protected $table = 'monitoreo.contacto_siagro';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'fecha',
        'nombre',
        'email',
        'mensaje',
    ];
}
