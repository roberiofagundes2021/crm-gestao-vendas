@extends('layouts.app', ['pageSlug' => 'dashboard'])


@section('content')
    <div class="row justify-content-start mx-2 mr-5 g-5">

        <div class="col-6 justify-content-start text-Secondary float-start ">
            <h1 class="mt-3 text-dark display-2">Negócios</h1>
        </div>

        <div class="col-6 justify-content-start text-Secondary float-start ">
            <br>
            <label>PESQUISAR</label><BR>
            <input type="search" name="" id="">
            <button type="button" class="btn btn-primary w-15 h-27 btn-sm">Buscar</button>
        </div>


        <div class="container mt-3">
            <div class="row">
                <div class="col-1 pl-2  ">
                    <button class="btn btn-primary btn-sm " style="width:7rem">Filtros</button>
                </div>

                <div class="col-1 pl-3 ml-4" style="width:7rem">
                    <button class="btn btn-primary btn-sm">Motivo <br> (perdido)</button>
                </div>

                <div class="col-1 pl-3 ml-4" style="width:7rem">
                    <button class="btn btn-primary btn-sm">Funil</button>
                </div>

                <div class="offset-1 col-1 pl-3 mx-2" style="width:7rem">
                    <button class="btn btn-primary btn-sm">Cadastrar</button>
                </div>

                <div class="offset-1 col-1 pl-3 ml-3" style="width:7rem">
                    <button class="btn btn-primary btn-sm">Exportar E-mails</button>
                </div>

                <div class="offset-1 col-1 pl-3 mx-6" style="width:7rem">
                    <button class="btn btn-primary btn-sm">Migrar<br> Negócios<br> em Massa</button>
                </div>

            </div>
        </div>

        <br>
        <br>
        <br>
        <div class="container" style="width:80rem">

            <div class="row">
                <div class="col-1 " style="width: 7rem">
                    <form action="" method="post">
                        <label for="">Responsável</label>
                        <select class="form-select " multiple aria-label="multiple select example" style="width: 7rem">
                            @foreach ($Web4Administradores as $webadmin)
                                <option value="">
                                    {{ $webadmin->Usuario }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1 mx-5 ">
                    <form action="" method="post">
                        <label for="">Etapa</label>
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4NegociosEtapa as $web4negociosEtapa)
                                <option>
                                    {{ $web4negociosEtapa->Titulo }}<br>
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1 p-2">
                    <form action="" method="post">
                        <label for="">Status</label>
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4NegociosStatus as $web4negociosstatus)
                                <option value="">
                                    {{ $web4negociosstatus->Titulo }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1 mx-5">
                    <form action="" method="post">
                        <label for="">Status 2 </label>
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4NegociosStatus2 as $web4negociosstatus2)
                                <option value="">
                                    {{ $web4negociosstatus2->Titulo }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1">
                    <form action="" method="post">
                        <label for="">Ação</label>
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4NegociosAcoes as $web4NegociosAcoes)
                                <option value="">
                                    {{ $web4NegociosAcoes->Titulo }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1 ml-5">
                    <form action="" method="post">
                        <label for="">Categoria</label>
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4NegociosCategoria as $web4NegociosCategoria)
                                <option value="">
                                    {{ $web4NegociosCategoria->Titulo }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1 ml-5">
                    <form action="" method="post">
                        <label for="">Grupo de Administrador</label>
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                                <option value="">
                                    {{ $web4AdministradoresGrupo->Nome }}
                                </option>
                            @endforeach
                        </select>
                    </form>

                </div>

                <div class="pe-5 col-1 ml-4 mt-5">
                    <button type="button" class="btn btn-primary w-15 h-27 btn-sm">Buscar</button>
                </div>

            </div>

            <div class="container">
                <div class="row">
                    <div col-4>
                        <label for="">quantidade por pagina</label><br>
                        <select class="form-select"" style="width:7rem">
                            <option value="100" selected="selected">100</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="1000">1000</option>
                        </select>

                    </div>
                </div>
            </div>
            <br>
            <br>

            <div class="container pr-4 mr-4" style="width: 60rem">
                <div class="row mx-1">

                    <div class="col-3 text-dark">
                        <div class="card-2 ">
                            <h5 class="card-title text-dark">Titulo/Progresso</h5>
                            <div class="card-body bg-white bg-white text-dark">
                                    <label for="">Tes1te5611</label>
                                    <select class="form-select" style="width:10rem">
                                        @foreach ($Web4NegociosEtapa as $web4negociosEtapa)
                                            <option>
                                                {{ $web4negociosEtapa->Titulo }}<br>
                                            </option>
                                        @endforeach
                                    </select> 
                                    <br>
                                    <br>

                                    <select class="form-select" style="width:10rem">
                                        @foreach ($Web4NegociosStatus2 as $web4negociosstatus2)
                                            <option value="">
                                                {{ $web4negociosstatus2->Titulo }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <br>
                                    <select class="form-select" style="width:10rem">
                                        @foreach ($Web4NegociosStatus2 as $web4negociosstatus2)
                                            <option value="">
                                                {{ $web4negociosstatus2->Titulo }}
                                            </option>
                                        @endforeach
                                    </select>

                                    <br>
                                    <br>

                                <a href="javascript:;" class="FtnExt14" onclick="Negocios.HistoricoEnviarModal('1');">
                	                Enviar nova Observação
                                </a>
                               
                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                    <div class="col-2 text-dark">
                        <div class="card-1">
                            <h5 class="card-title text-dark">Periodo</h5>
                            <div class="card-body text-dark bg-white">
                                

                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                    <div class="col-2 text-dark">
                        <div class="card-1">
                            <h5 class="card-title text-dark">Empresa</h5>
                            <div class="card-body  text-dark bg-white">

                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                    <div class="col-2 text-dark">
                        <div class="card-1">
                            <h5 class="card-title text-dark">Detalhes</h5>
                            <div class="card-body  text-dark bg-white">

                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                    <div class="col-2 text-dark">
                        <div class="card-1">
                            <h5 class="card-title text-dark">Ações</h5>
                            <div class="card-body bg-white text-dark">

                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>
                    <div class="col-12">
                       <div class="card-1">
                           
                            <div class="card-body bg-white text-dark">
                                 <h5 class="card-title text-dark">Total</h5>
                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                </div>

            </div>

           

        </div>

    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
@endpush
