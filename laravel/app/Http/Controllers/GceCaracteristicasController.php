<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
**/


namespace App\Http\Controllers;

use App\Models\gce_caracteristicas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GceCaracteristicasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Variable para consultar los datos de la BD
        $datosPc['equipo'] = gce_caracteristicas::paginate(5);

        //Proporcinamos los datos al index
        return view('equipos.create' , $datosPc);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Variable para consultar los datos de la BD
        $datosPc['equipo'] = gce_caracteristicas::paginate(5);

        //Proporcinamos los datos al index
        return view('equipos.create' , $datosPc);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validacion de campos vacios
        $campos=[
            'nombre'=>'required|string|max:100',
            'tipoPlaca'=>'required|string|max:100',
            'modeloTorre'=>'required|string|max:100',
            'marcaProcesador'=>'required|string|max:100',
            'marcaTarjeta'=>'required|string|max:100',
            'tamañoRam'=>'required|string|max:100',
            'modeloDisco'=>'required|string|max:100',
            'tipoTeclado'=>'required|string|max:100',
            'tipoMouse'=>'required|string|max:100',
            'tamañoPantalla'=>'required|string|max:100'
        ];

        $mensajes=[
            'required'=>'El :attribute es requerido'
        ];
        //Validamos esos campos
        $this->validate($request,$campos,$mensajes);

        //Recepcionamos todos los datos de la tabla menos el token
        $datosPc = request()->except('_token');

        //Validamos si el estado del equipo se deja null tendra el mismo de la BD
        if ($datosPc['estado'] == "") {
            $datosPc['estado'] = "Inactivo";
        }

        //Insertamos los campos en la BD
        gce_caracteristicas::insert($datosPc);

        //Redireccionamos con el mensaje actual
        return redirect('equipos')->with('mensaje','Registro Agregado Con Exito');
    }

   
    public function show(gce_caracteristicas $computadores)
    {
        //Funcion no utilizada
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //recuperar los datos de la BD
        $computador = gce_caracteristicas::findOrFail($id);

        //Pasamos los datos para imprimirla nuevamente
        return view('equipos.edit', compact('computador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validacion de campos vacios
        $campos=[
            'nombre'=>'required|string|max:100',
            'tipoPlaca'=>'required|string|max:100',
            'modeloTorre'=>'required|string|max:100',
            'marcaProcesador'=>'required|string|max:100',
            'marcaTarjeta'=>'required|string|max:100',
            'tamañoRam'=>'required|string|max:100',
            'modeloDisco'=>'required|string|max:100',
            'tipoTeclado'=>'required|string|max:100',
            'tipoMouse'=>'required|string|max:100',
            'tamañoPantalla'=>'required|string|max:100'
        ];

        $mensajes=[
            'required'=>'El :attribute es requerido'
        ];
        //Validamos esos campos
        $this->validate($request,$campos,$mensajes);

        //Recepcionamos todos los datos de la tabla menos el token ni el metodo
        $datosPc = request()->except(['_token' , '_method']);
        
        //recuperar los datos de la BD
        $computador = gce_caracteristicas::findOrFail($id);

        //Validamos si el estado del equipo se deja null tendra el mismo de la BD
        if ($datosPc['estado'] == "") {
            $datosPc['estado'] = $computador['estado'];
        }

        //realizamos la actualizacion en la BD
        gce_caracteristicas::where('id','=',$id)->update($datosPc);

        //Redireccionamos con el mensaje actual
        return redirect('equipos')->with('mensaje','Registro Actualizado Con Exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Eliminamos el registro deseado
        gce_caracteristicas::destroy($id);

       //Redireccionamos con el mensaje actual
       return redirect('equipos')->with('mensaje','Registro Eliminado Con Exito');
    }
}
