@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
 </button>
</div>

@endif




<a href="{{ url('tarea/create') }}" class="btn btn-success">Registrar nueva tarea</a>
<br/>
<br/>
<table class="table table-dark">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Fecha de Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $tareas as $tarea )
        <tr>
            <td>{{ $tarea->id }}</td>
            <td>{{ $tarea->Nombre }}</td>
            <td>{{ $tarea->FechaDeInicio }}</td>
            <td>{{ $tarea->FechaFin }}</td>
            <td>{{ $tarea->Estado }}</td>
            <td>
                
            <a href="{{ url('/tarea/'.$tarea->id.'/edit') }}" class="btn btn-warning">
                    Editar
            </a>
            | 
            
            <form action="{{ url('/tarea/'.$tarea->id) }}" class="d-inline" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection