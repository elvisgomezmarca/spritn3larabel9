<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;
    protected $table= 'estadisticas';
    protected $fillable= [
        'id_partido',
        'id_persona',
        'titulo',
        'cantidad',
        'numero',

    ];
}
