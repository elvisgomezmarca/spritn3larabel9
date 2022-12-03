<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    use HasFactory;
    protected $table= 'campeonatos';
    protected $fillable= [
        'nombre',
        'fechaInicio',
        'fechaFin',
        'estado',

    ];
}
