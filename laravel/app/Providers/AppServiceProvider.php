<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 17/12/2023
**/

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Habilitamos el páginator
        Paginator::useBootstrap();
    }
}
