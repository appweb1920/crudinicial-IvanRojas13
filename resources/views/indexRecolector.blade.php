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
            <th>Nombre</th>
            <th>Dias de Recoleccion</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($recolectores as $recolector)
        <tr>
            <td>{{ $recolector->id }}</td>
            <td>{{ $recolector->nombre }}</td>
            <td>{{ $recolector->tipoBasura }}</td>
            <td>
                <form action="{{ route('destroy',$recolector->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('show',$recolector->id) }}">Muestra</a>
    
                    <a class="btn btn-primary" href="{{ route('edit',$recolector->id) }}">Edita</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection