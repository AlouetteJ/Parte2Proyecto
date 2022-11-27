<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellidos', 'nacimiento', 'correo', 'telefono', 'genero', 'pronombre', 'orientacion', 'ocupacion', 'edocivil', 'resactual', 'resanterior', 'nacionalidad', 'estudios', 'motivo'];
    //protected $dates = ['nacimiento'];
    // protected $guarded Esto es lo contrario, nos dice que no se puede

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function historial()
    {
        return $this->hasOne(Historial::class);
    }

}
