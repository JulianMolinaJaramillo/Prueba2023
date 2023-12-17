<!-- Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
--> 

<!-- Incluimos el template para habilitar el Bootstrap pero sin el login --> 
@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-uppercase text-primary"> Editar computadores </h1> 
<form action="{{ url('/equipos/'.$computador->id) }}" method="post" >
@csrf
{{ method_field('PATCH') }}

<!-- Incluimos el form.blade.php--> 
@include('equipos.form',['modo'=>'Editar'])
<br>
<!-- Regresar a create.blade.php--> 
<a href="{{ url('equipos/create') }}" class="form-control btn btn-warning"> Regresar </a>
</form>
</div>
@endsection