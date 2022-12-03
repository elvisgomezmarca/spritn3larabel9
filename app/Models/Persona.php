<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table= 'personas';
    protected $fillable= [
        'id_user',
        'id_equipo',
        'ci',
        'nombre',
        'apellido',
        'rol',
        'sexo',
        'nacionalidad',
        'fechaNac',
        'foto',

    ];
}
