<?php

namespace App\Providers;

use App\Models\Web4Administradores;
use App\Models\Web4AdministradoresGrupo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //aqui estou compartilhando uma variavel com as views 
        $Web4Administradores = Web4Administradores::all();
        $Web4AdministradoresGrupo = Web4AdministradoresGrupo::all();

        view()->share('Web4Administradores', $Web4Administradores);
        view()->share('Web4AdministradoresGrupo', $Web4AdministradoresGrupo);
    }
}
