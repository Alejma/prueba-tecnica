Mostar la lista de tareas
<<table class="table table-dark">

    <thead class="thead-light">
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
                
            <a href="{{ url('/tarea/'.$tarea->id.'/edit') }}">
                    Editar
            </a>
            | 
            
            <form action="{{ url('/tarea/'.$tarea->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">

            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>