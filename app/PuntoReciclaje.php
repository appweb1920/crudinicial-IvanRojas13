<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recolector;

class PuntoReciclaje extends Model
{
    protected $table = 'puntosreciclaje';
    protected $fillable = [
        'direccion', 'tipoBasura', 'horaApertura', 'horaCierre'
    ];

    public function getRecolector()
    {
        return $this->belongsToMany(Recolector::class);
    }
}
