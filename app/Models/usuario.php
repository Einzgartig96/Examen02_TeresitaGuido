<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model {

    use HasFactory;
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre_completo', 'cedula', 'rol','username', 'password','correo','telefono'
    ];

}
