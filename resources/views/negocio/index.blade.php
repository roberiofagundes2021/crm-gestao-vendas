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
                        <div class=h6>Status 2 </div>
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
                                    <label for="">{{ $webadmin->Usuario }}</label>
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
                                    <div class="h6">
                                        <b>Última Interação:</b>
                                    "04:09 PM (on 09/03/2023<br>
                                    (quinta-feira))"
                                    </div>
                                        
                                    
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
                                <div class="h6">
                                    <b>Data de Cadastro:</b>
                                </div>
                                <div class="h6">
                                    <b>Data de inicio:</b>
                                </div>

                                <div class="h6">
                                    <b>Previsão de Conclusão:</b>
                                </div>
                            </div>
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                    <div class="col-3 text-dark">
                        <div class="card-1">
                            <h5 class="card-title text-dark">Empresa</h5>
                            <div class="card-body  text-dark bg-white">
                                @foreach ($Web4Revenda as $web4Revenda)
                                    
                                @endforeach
                                <label for="">{{$web4Revenda->Nome_RazaoSocial}}</label><br>
                                <label for="">Email:</label><br>
                                <label for="">Telefone:</label><br>
                                <label for="">Pessoas</label><br><br>
                                 <a href="javascript:;"
                             onclick="Revendas.PessoasEditar('3', 'NEGOCIOS_LISTAGEM');">[Cadastrar Pessoas]
                             </a>
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
                                <label for="">Responsável</label><br>
                                 <label for="">Valor</label><br>
                                  <label for="">Categoria</label><br>

                                  <b>Já tem Site?</b>
                            </div>
                            
                        </div>
                        <card-body>
                            <h5 class="card-title text-dark"></h5>
                        </card-body>
                    </div>

                    <div class="col-1 text-dark">
                        <div class="card-1">
                            <h5 class="card-title text-dark">Ações</h5>
                            <div class="card-body bg-white text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0
                                     0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5
                                      0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 
                                    2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 
                                    1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0
                                     0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0
                                      0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg><br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5
                                     0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 
                                     0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5
                                     0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0
                                    1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5
                                    0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg><br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                                    fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 
                                    1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1
                                     .5.5v1a.5.5 0
                                    0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 
                                    0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5
                                    0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 
                                    0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 
                                    0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0
                                        1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 
                                        0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 
                                        0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 
                                        0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 
                                        0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 
                                    1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                                </svg><br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" 
                                fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0
                                1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96
                                    0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96
                                    0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96
                                    0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96
                                    0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96
                                        0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96
                                        0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96
                                        0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96
                                        0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96
                                            0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96
                                            0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96
                                            0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 
                                            0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048
                                            3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984
                                                0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 
                                                7.646.087.065-.087-.065z"/>
</svg>
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
