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
        'cabello', 'cejas', 'mandibula', 'cuello', 'dientes', 'padre',
        'madre', 'hermano', 'hermana', 'hijo', 'hija', 'numerohijo',
        'vive', 'diabetes', 'hipertension', 'cancer', 'otros', 'infancia',
        'diabetes1', 'hipertension1', 'cancer1', 'otros1', 'habitos', 'alcohol',
        'drogas', 'alimentacion', 'sueño', 'diagnostico', 'anotaciones', 'pronostico'
        //,'pruebas','pruebas_aplicadas'
    ];
}
