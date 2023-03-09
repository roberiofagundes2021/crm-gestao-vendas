@extends('layouts.app', ['pageSlug' => 'dashboard'])


@section('content')
    <div class="row justify-content-start mx-2 mr-5 g-5">

        <div class="col-12 justify-content-start text-Secondary float-start ">
            <h1 class="mt-3 text-dark display-2">Empresa</h1>
        </div>
        <div class="col-2">
            <button class="btn btn-primary">Filtros</button>
        </div>
        <div class="col-2">
            <button class="btn btn-primary">Cadastrar</button>
        </div>

        <div class="col-2">
            <button class="btn btn-primary">Exportar E-mails</button>
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-start">
                <!--inicio da col-12-->
                <div class="col-12 ">

                    <div class="container">

                        <div class="row" justify-content-start>

                            <!-- inicio de card-->
                            <div class="card-3 mx-1" style="width: 7rem">
                                <form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <label for="">
                                                    Categoria
                                                </label>
                                            </tr>
                                            <tr>
                                                <select name="CodigoCategoria" id="" style="width:5rem">
                                                    <option value="1">
                                                        Cliente
                                                    </option>
                                                </select>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <!-- inicio de card-->
                            <div class="card-3 mx-1" style="width: 7rem">
                                <form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <label for="">
                                                    Categoria
                                                </label>
                                            </tr>
                                            <tr>
                                                <select name="CodigoCategoria" id="" style="width:5rem">
                                                    <option value="1">
                                                        Cliente
                                                    </option>
                                                </select>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="card-3 mx-1" style="width: 7rem">
                                <form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <label for="">
                                                    Responsável
                                                </label>
                                            </tr>
                                            <tr>
                                                <select name="CodigoCategoria" id="" style="width:5rem">
                                                    <option value="1">
                                                        @foreach ($Web4Administradores as $web4admin)
                                                            {{ $web4admin->Nome }}<br>
                                                        @endforeach
                                                    </option>
                                                </select>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="card-3 mx-1" style="width: 7rem">
                                <form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="">
                                                        Estado
                                                    </label>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td>
                                                    <select name="CodigoCategoria mx-1" id="" style="width:5rem">
                                                        <option value="1">
                                                            @foreach ($Estado as $estado)
                                                                {{ $estado->Nome }}<br>
                                                            @endforeach
                                                        </option>
                                                    </select>

                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>

                            <div class="card-3 mx-2 " style="width: 10rem">
                                <form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="CodigoCategoria">
                                                        Grupo de Administrador
                                                    </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="CodigoCategoria" id="" style="width:12rem">

                                                        <option value="1" style="width:4rem">Administrador Global
                                                        </option>
                                                        <option value="15" style="width:4rem">Comercial</option>

                                                    </select>

                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <div class="card-3 pl-5 mx-1" style="width: 7rem">
                                <form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="">
                                                        Nome
                                                    </label>
                                                    <input type="search" name="" id=""><br>
                                                    <button type="button" class="btn btn-primary">Buscar</button>
                                                </td>
                                               
                                            </tr>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                <!--fim da col-12-->
                </div>
                <!--inicio da row -->
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <label>
                                Ordem
                            </label>
                            <form action="" method="post">
                                <select name="" id="">
                                    <option value="1">
                                        Nome - A/Z
                                    </option>

                                    <option value="2">
                                        Nome - Z/A
                                    </option>

                                    <option value="3">
                                        Data de Cadastro - Recente
                                    </option>

                                    <option value="4">
                                        Data de Cadastro - Antigo
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <!--fim da row -->
            </div>
            <br>
            <br>
            <br>

            <div class="container">
                <div class="row">
                    <div col-12>
                        <label for="">
                            Nenhum registro localizado
                        </label>
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
