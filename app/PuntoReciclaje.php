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

    /*public function getRecolectores()
    {
        return $recolectores = Recolector::where('id',$this->id)->get();
    }*/
}
