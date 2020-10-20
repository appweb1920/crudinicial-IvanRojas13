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
    //protected $table="puntos";
    //protected $fillable=['nombre'];

    public function getPuntos()
    {
        return $puntosreciclaje = PuntoReciclaje::where('id',$this->id)->get();
    }
}
