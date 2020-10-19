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
        $puntosreciclaje = PuntoReciclaje::latest()->paginate(5);
  
        return view('index',compact('puntosreciclaje'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        /*$puntosrecoleccion = PuntoReciclaje::all();
        return view('puntosrecoleccion')->with($puntosrecoleccion);*/
        //return($puntosrecoleccion);
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
        $request->validate([
            'direccion' => 'required',
            'tipoBasura' => 'required',
            'horaApertura' => 'required',
            'horaCierre' => 'required',
        ]);
  
        PuntoReciclaje::create($request->all());
   
        return redirect()->route('index')
                        ->with('success','Punto de recoleccion añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PuntoReciclaje $puntoreciclaje)
    {
        //$puntorecoleccion = PuntoReciclaje::find($id);
        //$recolectores = Recolector::where('idPunto',$id)->get();
        //return view('detallePuntoReciclaje')->with($puntorecoleccion);
        return view('show',compact('puntoreciclaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PuntoReciclaje $puntoreciclaje)
    {
        return view('show',compact('puntoreciclaje'));
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
        $request->validate([
            'direccion' => 'required',
            'tipoBasura' => 'required',
            'horaApertura' => 'required',
            'horaCierre' => 'required',
        ]);
  
        $puntoreciclaje->update($request->all());
  
        return redirect()->route('index')
                        ->with('success','Se actualizo el punto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PuntoReciclaje $puntoreciclaje)
    {
        $puntoreciclaje->delete();
  
        return redirect()->route('index')
                        ->with('success','Borrado exitosamente');
    }
}
