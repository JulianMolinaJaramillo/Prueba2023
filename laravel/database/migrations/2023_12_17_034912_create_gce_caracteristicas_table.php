<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
**/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Creamos los campos en nuestra BD
        Schema::create('gce_caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipoPlaca');
            $table->string('modeloTorre');
            $table->string('marcaProcesador');
            $table->string('marcaTarjeta');
            $table->string('tamañoRam');
            $table->string('modeloDisco');
            $table->string('tipoTeclado');
            $table->string('tipoMouse');
            $table->string('tamañoPantalla');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gce_caracteristicas');
    }
};
