<!-- Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
--> 

<!-- Incluimos el template para habilitar el Bootstrap pero sin el login --> 
@extends('layouts.app')
@section('content')

<div class="container">
<h1 class="text-uppercase text-primary">Registrar computadores </h1>
<br>
<form action="{{ url('/equipos')}}" method="post">
@csrf
<!-- Incluimos el form.blade.php--> 
@include('equipos.form',['modo'=>'Agregar'])

</form>
<!-- Incluimos el index.blade.php--> 
@include('equipos.index')