<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'motivos', 'peso', 'estatura', 'complexion', 'tez',
        'alerta', 'marcha', 'vestimenta', 'accesorios', 'cicatrices',
        'lesiones', 'cabeza', 'orejas', 'ojos', 'nariz', 'boca',
        'cabello', 'cejas', 'mandibula', 'cuello', 'dientes', 'padre', 'padrevive',
        'madre', 'madrevive', 'hermano', 'hermanos', 'hermana', 'hermanas', 'hijo',
        'hijos', 'hija', 'hijas', 'numerohijo', 'vive', 
        'habitos', 'alcohol', 'drogas', 'alimentacion', 'sueño', 'diagnostico', 
        'anotaciones', 'pronostico','pruebas','pruebas_aplicadas'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
