<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recolector;

class PuntoReciclaje extends Model
{
    protected $table="puntos";
    /*protected $fillable=['nombre'];

    public function getRecolectores()
    {
        return $recolectores = Recolector::where('idPunto',$this->id)->get();
    }*/
}
