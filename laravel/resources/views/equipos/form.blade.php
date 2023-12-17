<!-- Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
--> 

<!-- Verificamos lo errores encontrados en el llenado y los mostramos en una lista--> 
@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li> 
        @endforeach
        </ul>
    </div>
@endif

<div>
    <!-- Formulario de registros--> 
    <section >
        <div class="input-group">
            <input class="form-control" type="text" name="nombre" placeholder="Nombre del equipo" value="{{ isset($computador->nombre)?$computador->nombre:old('nombre') }}">
            <input class="form-control" type="text" name="tipoPlaca" placeholder="Board" value="{{ isset($computador->tipoPlaca)?$computador->tipoPlaca:old('tipoPlaca') }}"> 
            <input class="form-control" type="text" name="modeloTorre" placeholder="Modelo" value="{{ isset($computador->modeloTorre)?$computador->modeloTorre:old('modeloTorre') }}">                
        </div>

        <div class="input-group">          
            <input class="form-control" type="text" name="marcaProcesador" placeholder="Procesador" value="{{ isset($computador->marcaProcesador)?$computador->marcaProcesador:old('marcaProcesador') }}">      
            <input class="form-control" type="text" name="marcaTarjeta" placeholder="Gráfica" value="{{ isset($computador->marcaTarjeta)?$computador->marcaTarjeta:old('marcaTarjeta') }}">
            <input class="form-control" type="text" name="tamañoRam" placeholder="Ram" value="{{ isset($computador->tamañoRam)?$computador->tamañoRam:old('tamañoRam') }}">             
        </div>

        <div class="input-group">
            <input class="form-control"type="text" name="modeloDisco" placeholder="Disco" value="{{ isset($computador->modeloDisco)?$computador->modeloDisco:old('modeloDisco') }}">
            <input class="form-control"type="text" name="tipoTeclado" placeholder="Teclado" value="{{ isset($computador->tipoTeclado)?$computador->tipoTeclado:old('tipoTeclado') }}"> 
            <input class="form-control"type="text" name="tipoMouse" placeholder="Mouse" value="{{ isset($computador->tipoMouse)?$computador->tipoMouse:old('tipoMouse') }}" >      
        </div>     
    </section>

    <div class="input-group">
        <input class="form-control "type="text" name="tamañoPantalla" placeholder="Pantalla" value="{{ isset($computador->tamañoPantalla)?$computador->tamañoPantalla:old('tamañoPantalla') }}">
        <select name="estado" class="form-select">
            <option value=""> Estado </option>
            <option value="Activo" >Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
    </div>
    <br>
    <section>
        <input type="submit" value="{{ $modo }}" onclick="return confirm('Confirmar')" class="form-control  btn btn-primary">
    </section>
    <br><br>
</div>