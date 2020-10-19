@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edita Punto Recoleccion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('puntosrecoleccion.index') }}"> Atras</a>
            </div>
        </div>
    </div>
  
    <form action="{{ route('puntosrecoleccion.update',$puntorecoleccion->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="direccion" value="{{ $puntorecoleccion->direccion }}" class="form-control" placeholder="Direccion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo Basura:</strong>
                    <input type="text" name="tipoBasura" value="{{ $puntorecoleccion->tipoBasura }}" class="form-control" placeholder="Tipo Basura">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora Apertura:</strong>
                    <input type="text" name="horaApertura" value="{{ $puntorecoleccion->horaApertura }}" class="form-control" placeholder="Hora Apertura">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora Cierre:</strong>
                    <input type="text" name="horaCierre" value="{{ $puntorecoleccion->horaCierre }}" class="form-control" placeholder="Hora Cierre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection