
@extends('layaout')
@section('content')
@csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Muestra</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Atras</a>
            </div>
        </div>
    </div>

    <input type="hidden" name="id" value="{{$puntosreciclaje->id}}">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Direccion:</strong>
                {{$puntosreciclaje->direccion}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo Basura:</strong>
                {{$puntosreciclaje->tipoBasura}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora Apertura:</strong>
                {{$puntosreciclaje->horaApertura}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hora Cierre:</strong>
                {{$puntosreciclaje->horaCierre}}
            </div>
        </div>
    </div>
@endsection