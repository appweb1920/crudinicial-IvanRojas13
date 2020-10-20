@extends('layaout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edita Punto Recoleccion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Atras</a>
            </div>
        </div>
    </div>
  
    <form action="{{ route('update',$puntoreciclaje->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="direccion" value="{{ $puntoreciclaje->direccion }}" class="form-control" placeholder="Direccion">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo Basura:</strong>
                    <input type="text" name="tipoBasura" value="{{ $puntoreciclaje->tipoBasura }}" class="form-control" placeholder="Tipo Basura">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora Apertura:</strong>
                    <input type="text" name="horaApertura" value="{{ $puntoreciclaje->horaApertura }}" class="form-control" placeholder="Hora Apertura">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hora Cierre:</strong>
                    <input type="text" name="horaCierre" value="{{ $puntoreciclaje->horaCierre }}" class="form-control" placeholder="Hora Cierre">
                </div>
            </div>
            <input type="hidden" name="id" value="{{$puntoreciclaje->id}}">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection