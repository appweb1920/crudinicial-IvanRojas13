@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Puntos Recoleccion</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('puntosrecoleccion.create') }}"> Crear</a>
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
            <th>direccion</th>
            <th>tipoBasura</th>
            <th>horaApertura</th>
            <th>horaCierre</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($puntosrecoleccion as $punto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $punto->direccion }}</td>
            <td>{{ $punto->tipoBasura }}</td>
            <td>{{ $punto->horaApertura }}</td>
            <td>{{ $punto->horaCierre }}</td>
            <td>
                <form action="{{ route('puntosrecoleccion.destroy',$punto->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('punto.show',$punto->id) }}">Muestra</a>
    
                    <a class="btn btn-primary" href="{{ route('punto.edit',$punto->id) }}">Edita</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $puntosrecoleccion->links() !!}
      
@endsection