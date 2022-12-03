<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juez extends Model
{
    use HasFactory;
    protected $table= 'jueces';
    protected $fillable= [
        'ci',
        'nombre',
        'apellido',
        'sexo',
        'nacionalidad',
        'fechaNac',
        'foto',

    ];
}
