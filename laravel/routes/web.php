<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GceCaracteristicasController;
use App\Models\gce_caracteristicas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //Variable para consultar los datos de la BD
    $datosPc['equipo'] = gce_caracteristicas::paginate(20);

    //Proporcinamos los datos al index
    return view('equipos.create' , $datosPc);
});

//Acceder a una URL especifica
Route::get('equipos/create', [GceCaracteristicasController::class,'create']);
//Acceder a todas las URL
Route::resource('equipos', GceCaracteristicasController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
