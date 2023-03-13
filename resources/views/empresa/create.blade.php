<script type="text/javascript" src={{ 'js/script/form.js' }}></script>

@extends('layouts.app', ['pageSlug' => 'dashboard'])


@section('content')
    <div class="row justify-content-start mx-2 mr-5 g-5">

        <div class="col-12 justify-content-start text-Secondary float-start ">
            <h1 class="mt-3 text-dark display-2">Cadastrar &nbsp;
                <span id="titulo-pessoa-fisica" style="display: none;">pessoa física</span>
                <span id="titulo-pessoa-juridica" style="display: none;">pessoa jurídica</span>
            </h1>
        </div>

        <div class="col-12 justify-content-start text-Secondary float-start ">
            <a href="#tab-5">Dados Primários</a><br>
            <a href="#tab-5">Dados Principais</a><br>
            <a href="#tab-5">Pessoas</a><br>
            <a href="#tab-5">Endereço</a><br>
            <a href="#tab-5">Redes Sociais</a><br>
            <a href="#tab-5">Arquivos</a><br>
        </div>

        <div class="col-md-10 justify-content-start text-Secondary float-start ">

            <!-- Apresentar o título conforme selecionado, pessoa física ou pessoa jurídica-->
            <label class="col-sm-2 col-form-label text-dark" style="display: flex;">
                Cadastrar&nbsp;
                <label id="titulo-pessoa-fisica" class="col-sm-4 text-dark" style="display: none;">pessoa física</label>
                <label id="titulo-pessoa-juridica" class="col-sm-4 text-dark" style="display: none;">pessoa jurídica</label>
            </label>

            <!-- Início formulário cadastrar pessoa física ou pessoa jurídica -->
            <form method="POST" action="">
                @csrf
                <label class="label label-default text-dark">Pessoa Fisica</label>
                <!-- Selecionar o tipo de formulário pessoa física ou jurídica -->
                
                <input type="radio" name="tipo_pessoa" id="tipo_pessoa" value="1"
                    onchange="formPessoaFisica();">
                <label class="label label-default text-dark">Pessoa Jurídica</label>
                <input type="radio" name="tipo_pessoa" id="tipo_pessoa" value="2"
                    onchange="formPessoaJuridica();"><br>

                <!-- Campos para cadastrar pessoa física -->
                <div id="form-pessoa-fisica" style="display: none;">
                    <div class="form-group">
                   <span class="label label-default text-dark">Nome</span>
                        <input class="form-control text-dark" type="text"><br>

                        <span class="label label-default text-dark">CPF:</span>
                        <input class="form-control text-dark w-25" class="form-control" type="number" name="pessoarg"
                            id="pessoarg"><br>

                        <span class="label label-default text-dark">RG:</span>
                        <input class="form-control text-dark w-25" class="form-control" type="number" name="pessoarg"
                            id="pessoarg"><br>

                        <span class="label label-default text-dark">E-mail</span>
                        <input class="form-control text-dark w-50" type="email" name="pessoaemail" id="pessoaemail"><br>

                        <span class="label label-default text-dark">Forma de Contato:</span>
                        <select name="" id="">
                            <option value="">Vista</option>
                            <option value="">Tele Vendas</option>
                            <option value="">E-mail</option>
                            <option value="">Telefone</option>
                            <option value="">Site</option>
                            <option value="">Rede Social</option>
                        </select> <br>

                        <span class="label label-default text-dark">Telefone Fixo:</span>
                        <input class="form-control text-dark text-dark w-30" type="number" name="pessoatelefone"
                            id="pessoatelefone"><br>
                    </div>

                </div>

                <!-- Campos para cadastrar pessoa jurídica -->
                <div id="form-pessoa-juridica" style="display: none;">
                    <span class="label label-default text-dark">Nome Fantasia:</span>
                    <input class="form-control" type="text" name="pessoajuridicanome" id="">

                    <span class="label label-default text-dark">Razão Social</span>
                    <input class="form-control" type="text" name="pessoajuridicarazaosocial">

                    <span class="label label-default text-dark">CNPJ</span>
                    <input class="form-control" type="number" name="pessoajuridicacnpj">

                    <span class="label label-default text-dark">IE:</span>
                    <input class="form-control" type="text">

                    <span class="label label-default text-dark">E-mail</span>
                    <input class="form-control" type="email">

                </div>
                <br>
                <div id="form-btn-cadastrar" style="display: none;">
                    <input type="submit" name="SendCad" value="Cadastrar"><br><br>
                </div>

            </form>
            <!-- Fim formulário cadastrar pessoa física ou pessoa jurídica -->

            <script>
                // Função para carregar os campos para cadastrar pessoa física
                function formPessoaFisica() {
                    //console.log("Carregar formulário pessoa física.");

                    // Apresentar o título cadastrar pessoa física
                    document.getElementById("titulo-pessoa-fisica").style.display = 'block';
                    document.getElementById("titulo-pessoa-juridica").style.display = 'none';

                    // Apresentar o formulário cadastrar pessoa física
                    document.getElementById("form-pessoa-fisica").style.display = 'block';
                    document.getElementById("form-pessoa-juridica").style.display = 'none';

                    // Carregar o botão cadastrar após o usuário selecionar o tipo de formulário pessoa física ou jurídica
                    document.getElementById("form-btn-cadastrar").style.display = 'block';
                }

                // Função para carregar os campos para cadastrar pessoa jurídica
                function formPessoaJuridica() {
                    //console.log("Carregar formulário pessoa jurídica.");

                    // Apresentar o título cadastrar pessoa jurídica
                    document.getElementById("titulo-pessoa-juridica").style.display = 'block';
                    document.getElementById("titulo-pessoa-fisica").style.display = 'none';

                    // Apresentar o formulário cadastrar pessoa jurídica
                    document.getElementById("form-pessoa-fisica").style.display = 'none';
                    document.getElementById("form-pessoa-juridica").style.display = 'block';

                    // Carregar o botão cadastrar após o usuário selecionar o tipo de formulário pessoa física ou jurídica
                    document.getElementById("form-btn-cadastrar").style.display = 'block';
                }
            </script>



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
