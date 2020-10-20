<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReciclajePunto extends Model
{
    protected $table= "recolectorespunto";
    protected $fillable=  [
        'idRecolector', 'idPunto'
    ];
}
