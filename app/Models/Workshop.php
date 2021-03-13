<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'hour',
        'technical_requirement',
        'image',
        'platform_web'
    ];

}

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_de_nacimiento',
        'genero',
        'email',
        'telefono',
        'ciudad',
        'como_nos_has_conocido',
    ];

}
