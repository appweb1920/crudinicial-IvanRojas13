@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agrega Punto Recoleccion</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('puntosrecoleccion.index') }}"> Atras</a>
        </div>
    </div>
</div>
   
<form action="{{ route('puntosrecoleccion.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion:</strong>
                <input type="text" name="direccion" class="form-control" placeholder="direccion">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Basura:</strong>
                <input type="text" name="tipoBasura" class="form-control" placeholder="tipoBasura">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora Apertura:</strong>
                <input type="text" name="horaApertura" class="form-control" placeholder="horaApertura">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora Cierre:</strong>
                <input type="text" name="horaCierre" class="form-control" placeholder="horaCierre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection