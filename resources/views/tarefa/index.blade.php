@extends('layouts.app', ['pageSlug' => 'dashboard'])


@section('content')
    <div class="row justify-content-start mx-2 mr-5 g-5">

        <div class="col-6 justify-content-start text-Secondary float-start ">
            
        </div>
        <div class="container mt-3">
            <h1 class="mt-3 text-dark display-2">Tarefas</h1>
            <div class="row">
                <div class="col-10 pl-2 mt-3  ">
                    <button class="btn btn-primary btn-sm " style="width:7rem">Filtros</button>
                    <button class="btn btn-primary btn-sm " style="width:14rem">Calendario de Conclusão</button>
                    <button class="btn btn-primary btn-sm " style="width:7rem">Cadastrar</button>
                    <button class="btn btn-primary btn-sm">Exclusão em Massa</button>
                    <button class="btn btn-primary btn-sm">Exportar E-mails</button>
                </div>
                <div class="col-2 justify-content-start text-Secondary float-start ">
                    <br>
                    <label>PESQUISAR</label><BR>
                    <input type="search" name="" id="">
                    <button type="button" class="btn btn-primary w-15 h-27 btn-sm">Buscar</button>
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
                        <select class="form-select " multiple aria-label="multiple select example" style="width: 7rem">
                            @foreach ($Web4Revenda as $web4Revenda)
                                <option value="">
                                    {{ $web4Revenda->Nome_RazaoSocial }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1 mx-5 ">
                    <form action="" method="post">
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4Administradores as $web4Administradores)
                                <option>
                                    {{ $web4Administradores->Usuario }}<br>
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-1">

                    <form action="" method="post">
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            <option value="">
                                Ação
                            </option>
                        </select>
                    </form>

                </div>
          

                <div class="col-1 ml-5">
                   
                    <form action="" method="post">
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">

                            <option value="">
                                Categoria
                            </option>

                        </select>
                    </form>

                </div>

                <div class="col-1 ml-5">

                    <form action="" method="post">
                        <select class="form-select" multiple aria-label="multiple select example" style="width:7rem">
                            @foreach ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                               <option value="">Grupo de Administrador</option>
                                <option value="">
                                    {{ $web4AdministradoresGrupo->Nome }}
                                </option>
                            @endforeach
                        </select>
                    </form>

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
