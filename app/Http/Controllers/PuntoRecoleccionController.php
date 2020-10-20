<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PuntoReciclaje;
use App\Recolector;

class PuntoRecoleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puntosreciclaje = PuntoReciclaje::all();
        return view('index')->with('puntosreciclaje',$puntosreciclaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puntoreciclaje = new PuntoReciclaje;
        $puntoreciclaje->direccion = $request->direccion;
        $puntoreciclaje->tipoBasura = $request->tipoBasura;
        $puntoreciclaje->horaApertura = $request->horaApertura;
        $puntoreciclaje->horaCierre = $request->horaCierre;
        $puntoreciclaje->save();
  
        //PuntoReciclaje::create($request->all());
   
        return redirect()->route('index')
                        ->with('success','Punto de recoleccion añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PuntoReciclaje  $puntoReciclaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $puntosreciclaje = PuntoReciclaje::find($id);

        return view('show')->with('puntosreciclaje', $puntosreciclaje);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puntosreciclaje = PuntoReciclaje::find($id);

        return view('edit')->with('puntosreciclaje', $puntosreciclaje);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PuntoReciclaje $puntoreciclaje)
    {
        $puntoreciclaje = PuntoReciclaje::find($request->id);
        $puntoreciclaje->direccion = $request->direccion;
        $puntoreciclaje->tipoBasura = $request->tipoBasura;
        $puntoreciclaje->horaApertura = $request->horaApertura;
        $puntoreciclaje->horaCierre = $request->horaCierre;
        $puntoreciclaje->save();
  
  
        return redirect()->route('index')
                        ->with('success','Se actualizo el punto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $puntoreciclaje=PuntoReciclaje::find($id);
        $puntoreciclaje->delete();
  
        return redirect()->route('index')
                        ->with('success','Borrado exitosamente');
    }
}
