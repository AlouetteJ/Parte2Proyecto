<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellidos', 'edad', 'nacimiento', 'correo', 'telefono', 'genero', 'pronombre', 'orientacion', 'ocupacion', 'edocivil', 'resactual', 'resanterior', 'nacionalidad', 'estudios', 'motivo'];
    // protected $guarded Esto es lo contrario, nos dice que no se puede
}
