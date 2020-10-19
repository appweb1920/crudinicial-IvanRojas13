@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Muestra</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('puntosrecoleccion.index') }}"> Atras</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion:</strong>
                {{ $puntorecoleccion->direccion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Basura:</strong>
                {{ $puntorecoleccion->tipoBasura }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora Apertura:</strong>
                {{ $puntorecoleccion->horaApertura }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora Cierre:</strong>
                {{ $puntorecoleccion->horaCierre }}
            </div>
        </div>
    </div>
@endsection