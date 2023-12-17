<!-- Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
--> 

<!-- Mensaje de alerta para mostrar los campos que faltan --> 
@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje')}}
@endif


<!-- tabla con los registro de la BD --> 
<h2 class="text-uppercase text-success">Computadores</h2>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Board</th>
            <th>Modelo</th>
            <th>Procesador</th>
            <th>Gráfica</th>
            <th>Ram</th>
            <th>Disco</th>
            <th>Teclado</th>
            <th>Mouse</th>
            <th>Pantalla</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <!-- Buscamos los registro de la BD y los asignamos --> 
    @foreach($equipo as $pc)
        <tbody>
            <tr>
                <td>{{ $pc->nombre }}</td>
                <td>{{ $pc->tipoPlaca }}</td>
                <td>{{ $pc->modeloTorre }}</td>
                <td>{{ $pc->marcaProcesador }}</td>
                <td>{{ $pc->marcaTarjeta }}</td>
                <td>{{ $pc->tamañoRam }}</td>
                <td>{{ $pc->modeloDisco }}</td>
                <td>{{ $pc->tipoTeclado }}</td>
                <td>{{ $pc->tipoMouse }}</td>
                <td>{{ $pc->tamañoPantalla }}</td>
                <td>{{ $pc->estado }}</td>
                <!-- Opciones de Editar y Eliminar registro --> 
                <td> <a href="{{ url('/equipos/'.$pc->id.'/edit') }}" class="btn btn-success"> Editar </a> |              
                <form action="{{ url('/equipos/'.$pc->id)}}" method="post" class="d-inline">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('quieres borrar')" value="Borrar" class="btn btn-danger">
                </form>
                </td>
            </tr>
        </tbody>
    @endforeach
</table>
<!-- Para habilitar la paginacion de la clase Paginator --> 
{!! $equipo->links() !!}
</div>
@endsection