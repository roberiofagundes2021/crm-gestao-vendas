<?php

namespace App\Providers;

use App\Models\Web4Administradores;
use App\Models\Web4AdministradoresGrupo;
use App\Models\Web4NegociosAcoes;
use App\Models\Web4NegociosCategoria;
use App\Models\Web4NegociosEtapa;
use App\Models\Web4NegociosMotivo;
use App\Models\Web4NegociosStatus;
use App\Models\Web4NegociosStatus2;
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
        $Web4NegociosEtapa=Web4NegociosEtapa::all();
        $Web4NegociosStatus=Web4NegociosStatus::all();
        $Web4NegociosStatus2 = Web4NegociosStatus2::all();
        $Web4NegociosCategoria = Web4NegociosCategoria::all();
        $Web4NegociosAcoes = Web4NegociosAcoes::all();
        $Web4AdministradoresGrupo = Web4AdministradoresGrupo::all();
        $Web4NegociosMotivo = Web4NegociosMotivo::all();
        

        view()->share('Web4Administradores', $Web4Administradores);
        view()->share('Web4AdministradoresGrupo', $Web4AdministradoresGrupo);
        view()->share('Web4NegociosEtapa', $Web4NegociosEtapa);
        view()->share('Web4NegociosStatus', $Web4NegociosStatus);
        view()->share('Web4NegociosStatus2', $Web4NegociosStatus2);
        view()->share('Web4NegociosCategoria', $Web4NegociosCategoria);
        view()->share('Web4NegociosAcoes', $Web4NegociosAcoes);
        view()->share('Web4AdministradoresGrupo', $Web4AdministradoresGrupo);
        view()->share('Web4NegociosMotivo', $Web4NegociosMotivo);
    }   
}
