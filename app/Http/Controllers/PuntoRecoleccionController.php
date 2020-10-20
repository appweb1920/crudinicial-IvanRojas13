<?php

namespace App\Http\Controllers;

use App\Http\Resources\puntoReciclaje as ResourcesPuntoReciclaje;
use Illuminate\Http\Request;
use App\PuntoReciclaje;
use App\Recolector;
use PuntosReciclaje;

class PuntoRecoleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$puntosreciclaje = PuntoReciclaje::latest()->paginate(5);


        $puntosreciclaje = PuntoReciclaje::all();
        return view('index')->with('puntosreciclaje',$puntosreciclaje);
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
        /*$request->validate([
            'direccion' => 'required',
            'tipoBasura' => 'required',
            'horaApertura' => 'required',
            'horaCierre' => 'required',
        ]);*/

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$recolectores = Recolector::where('idPunto',$id)->get();
        //return view('detallePuntoReciclaje')->with($puntorecoleccion);
        //$puntosreciclaje = PuntoReciclaje::where();
        //$puntosreciclaje = PuntoReciclaje::where('id', $this->id)->get();
        //return view('show')->with('puntoreciclaje',$puntoreciclaje);
        $puntoreciclaje = PuntoReciclaje::find($id);

        return view('show')->with('puntoreciclaje', $puntoreciclaje);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puntoreciclaje = PuntoReciclaje::find($id);

        return view('edit')->with('puntoreciclaje', $puntoreciclaje);
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
