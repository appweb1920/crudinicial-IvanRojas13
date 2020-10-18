<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Saluda()
    {
        return view('puntosRecoleccion');
    }

    public function vistaPuntos(Request $request)
    {
        $puntoRecoleccion = $request->puntoRecoleccion;

        return view('puntosRecoleccion')->with('PR',$puntoRecoleccion);
    }
}
