@extends('layaout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Puntos Recoleccion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create') }}"> Crear</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Direccion</th>
            <th>Tipo de Basura</th>
            <th>Hora Apertura</th>
            <th>Hora Cierre</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($puntosreciclaje as $punto)
        <tr>
            <td>{{ $punto->id }}</td>
            <td>{{ $punto->direccion }}</td>
            <td>{{ $punto->tipoBasura }}</td>
            <td>{{ $punto->horaApertura }}</td>
            <td>{{ $punto->horaCierre }}</td>
            <td>
                <form action="{{ route('destroy',$punto->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('show',$punto->id) }}">Muestra</a>
    
                    <a class="btn btn-primary" href="{{ route('edit',$punto->id) }}">Edita</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection