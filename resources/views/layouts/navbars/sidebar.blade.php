<link href="{{ asset('black') }}/css/sidebar.css)" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<div class="sidebar">
    <div class="sidebar-wrapper text-dark mt-1 ">
        <div class="logo">

        </div>
        <ul class="nav fixed">

            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a " href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                </svg>
                    <span>{{ __('Inicio') }}</span>
                </a>
            </li>
            
            
             <!-- empresas -->
            <li >
                <a data-toggle="collapse" href="#empresa" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                    </svg>
                    <span  class="nav-link-text">{{ __('Empresa') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                
                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                <p style="color:black;">{{ __('Listar Todas') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                <p style="color:black;">{{ __('Cadastrar Novo') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>
                <!--inicio de usuario-->
                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#usuario" aria-expanded="false">
                                    
                                    <span  class="nav-link-text">{{ __('Usuários') }}</span>
                                    <b class="caret mt-1"></b>
                            </a>

                                <div  class="collapse show" id="usuario" aria-expanded="false" >
                                    <ul>
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                <p style="color:black;">{{ __('Listar Todos') }}</p>
                                            </a>
                                        </li>
                                    </ul> 
                                </div>  

                                <div  class="collapse show" id="usuario" aria-expanded="false" >
                                    <ul>
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                <p style="color:black;">{{ __('Cadastrar Novo') }}</p>
                                            </a>
                                        </li>
                                    </ul> 
                                </div>  

                                    <!--inicio de cargo-->
                                <div  class="collapse show" id="usuario" aria-expanded="false" >
                                    <ul>
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a data-toggle="collapse" href="#cargo" aria-expanded="false">
                                                <p style="color:black;">{{ __('Cargos') }}</p>
                                                <b class="caret mt-1"></b>
                                            </a>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Vendedor') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div> 
                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Diretor') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Comprador') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Marketing') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Secretaria') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Compras') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Sócio') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Financeiro') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Gerente') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Proprietário') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="cargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Outros') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                        </li>
                                    </ul> 
                                </div>  
                                 <!--Fim de cargo-->                          
                                
                        </li>
                    </ul>    
                </div>
                 <!--Fim de usuario-->
           

                <div  class="collapse show" id="empresa"  aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#pessoas" aria-expanded="false">
                                <p style="color:black;">{{ __('Pessoas') }}</p>
                                 <b class="caret mt-1"></b>
                            </a>

                                <div  class="collapse show" id="pessoas" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                <p style="color:black;">{{ __('Listar Todos') }}</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <div  class="collapse show" id="pessoas" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                <p style="color:black;">{{ __('Cadastrar Novo') }}</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                      <!--inicio de cargo-->
                                <div  class="collapse show" id="pessoas" aria-expanded="false" >
                                    <ul>
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a data-toggle="collapse" href="#pessoacargo" aria-expanded="false">
                                                <p style="color:black;">{{ __('Cargos') }}</p>
                                                <b class="caret mt-1"></b>
                                            </a>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Vendedor') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div> 
                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Diretor') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Comprador') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Marketing') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Secretaria') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Compras') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Sócio') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Financeiro') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Gerente') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Proprietário') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="pessoacargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Outros') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                        </li>
                                    </ul> 
                                </div>  
                                 <!--Fim de cargo-->  

                            <div  class="collapse show" id="pessoas" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                            <p style="color:black;">{{ __('Cadastrar Novo') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>
            
                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                             <a data-toggle="collapse" href="#Categorias" aria-expanded="false">
                                <p style="color:black;">{{ __('Categorias') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                                <div  class="collapse show" id="categorias" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                <p style="color:black;">{{ __('Cliente') }}</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                             <a data-toggle="collapse" href="#segmentos" aria-expanded="false">
                                <p style="color:black;">{{ __('Segmentos') }}</p>
                                <b class="caret mt-1"></b>
                            </a>
                                <div  class="collapse show" id="segmentos" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="#">
                                                <p style="color:black;">{{ __('Cliente') }}</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#responsavel" aria-expanded="false">
                                <p style="color:black;">{{ __('Responsável') }}</p>
                                <b class="caret mt-1"></b>
                            </a>
                            <div  class="collapse show" id="responsavel" aria-expanded="false" >
                                <ul class="nav pl-4 ">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                            @forelse ($Web4Administradores as $web4Administradores)
                                                {{$web4Administradores->Nome}}
                                            @empty
                                                <h6>não dados encontrado</h6>
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4 ">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#grupoadministradores" aria-expanded="false">
                                <p style="color:black;">{{ __('Grupo de Administradores') }}</p>
                                <b class="caret mt-1"></b>
                            </a>
                            <div  class="collapse show" id="grupoadministradores" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                            @forelse ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                                               {{$web4AdministradoresGrupo->Nome}} 
                                            @empty
                                                
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#estado" aria-expanded="false">
                                <p style="color:black;">{{ __('Estado') }}</p>
                            <b class="caret mt-1"></b>
                            </a>

                                <div  class="collapse show" id="estado" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a data-toggle="collapse" href="#centrooeste" aria-expanded="false">
                                                <p style="color:black;">{{ __('Centro-Oeste') }}</p>
                                                <b class="caret mt-1"></b>
                                            </a>

                                            <div  class="collapse show" id="centrooeste" aria-expanded="false" >
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a  href="{{ route('profile.edit') }}">
                                                            <p style="color:black;">{{ __('DF - Distrito Federal') }}</p>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div  class="collapse show" id="centrooeste" aria-expanded="false" >
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a  href="{{ route('profile.edit') }}">
                                                            <p style="color:black;">{{ __('GO - Goiás') }}</p>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div  class="collapse show" id="centrooeste" aria-expanded="false" >
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a  href="{{ route('profile.edit') }}">
                                                            <p style="color:black;">{{ __('MT - Mato Grosso') }}</p>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div  class="collapse show" id="centrooeste" aria-expanded="false" >
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a  href="{{ route('profile.edit') }}">
                                                            <p style="color:black;">{{ __('MS - Mato Grosso
                                                             do Sul') }}</p>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </li>

                                    </ul>
                                </div>

                                <div  class="collapse show" id="estado" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                <a data-toggle="collapse" href="#nordeste" aria-expanded="false">
                                                    <p style="color:black;">{{ __('Nordeste') }}</p>
                                                    <b class="caret mt-1"></b>
                                                </a>

                                                <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('AL - Alagoas') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('BA - Bahia') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('MA - Maranhão') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('PB - Paraiba') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('PE - Pernambuco') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('PI - PIAUI') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('RN - Rio Grande do Norte') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                 <div  class="collapse show" id="nordeste" aria-expanded="false" >
                                                    <ul class="nav pl-4">
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                            
                                                                <p style="color:black;">{{ __('SE - Sergipe') }}</p>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                
                                         </li>

                                    </ul>
                                </div>
                            <div  class="collapse show" id="estado" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a data-toggle="collapse" href="#norte" aria-expanded="false">
                                        
                                            <p style="color:black;">{{ __('Norte') }}</p>

                                            <b class="caret mt-1"></b>
                                        </a>

                                        <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('AC - Acre') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('AP - Amapá') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                         <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('AM - Amazonas') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                         <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('PA - Pará') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('RO - Rondônia') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('RR - Roraima') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="norte" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('TO - Tocantins') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </li>

                                </ul>
                            </div>

                            <div  class="collapse show" id="estado" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a data-toggle="collapse" href="#sudeste" aria-expanded="false">
                                        
                                            <p style="color:black;">{{ __('Sudeste') }}</p>

                                            <b class="caret mt-1"></b>
                                        </a>

                                        <div  class="collapse show" id="sudeste" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('ES - Espírito Santo') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="sudeste" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('MG - Minas Gerais') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="sudeste" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('RJ - Rio de Janeiro') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="sudeste" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('SP - São Paulo') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="estado" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a data-toggle="collapse" href="#sul" aria-expanded="false">
                                            <p style="color:black;">{{ __('Sul') }}</p>
                                            <b class="caret mt-1"></b>
                                        </a>

                                        <div  class="collapse show" id="sul" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('PR - Paraná') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="sul" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('RS - Rio Grande do Sul') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                        <div  class="collapse show" id="sul" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                            
                                                        <p style="color:black;">{{ __('SC - Santa Catarina') }}</p>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#filtros" aria-expanded="false">
                             
                                <p style="color:black;">{{ __('Filtros') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="filtros" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                                            
                                            <p style="color:black;">{{ __('Status - Ativado ') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div  class="collapse show" id="filtros" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                                            
                                            <p style="color:black;">{{ __('Status - Desativado ') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="empresa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a data-toggle="collapse" href="#modulos" aria-expanded="false">
                               
                                <p style="color:black;">{{ __('Módulos') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="modulos" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                                            
                                            <p style="color:black;">{{ __('Categorias ') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            
                            <div  class="collapse show" id="modulos" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                                            
                                            <p style="color:black;">{{ __('Segmentos ') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>
            </li>
            <!-- fim de empresas-->

            <!--Inicio de Negocio-->
            <li >
                <a data-toggle="collapse" href="#negocio" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                        </svg>
                    <span  class="nav-link-text">{{ __('Negocio') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <p style="color:black;">{{ __('Listar Todos') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                              
                                <p style="color:black;">{{ __('Listar sem Responsáveis') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                
                                <p style="color:black;">{{ __('Funil') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <p style="color:black;">{{ __('Cadastrar Novo') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                             <a data-toggle="collapse" href="#responsavel" aria-expanded="true">
                                <p style="color:black;">{{ __('Responsável') }}</p>
                                <b class="caret mt-1"></b>
                               
                            </a>

                            <div  class="collapse show" id="responsavel" aria-expanded="false" >
                                <ul class="nav pl-4 ">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                            @forelse ($Web4Administradores as $web4Administradores)
                                                {{$web4Administradores->Nome}}
                                            @empty
                                                <h6>não dados encontrado</h6>
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                           <a data-toggle="collapse" href="#etapa" aria-expanded="true">
                               
                                <p style="color:black;">{{ __('Etapas') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="etapa" aria-expanded="false" >
                                <ul class="nav pl-4 ">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                            @forelse ($Web4NegociosEtapa as $web4NegociosEtapa)
                                                {{$web4NegociosEtapa->Titulo}}
                                            @empty
                                                <h6>não dados encontrado</h6>
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <a data-toggle="collapse" href="#status" aria-expanded="true">
                                <p style="color:black;">{{ __('Status') }}</p>
                                <b class="caret mt-1"></b>
                            </a>
                            
                            <div  class="collapse show" id="status" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                        
                                            @forelse ($Web4NegociosStatus as $web4NegociosStatus)
                                                
                                                {{$web4NegociosStatus->CodigoImportacao}}<br>

                                            @empty
                                                
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                <a data-toggle="collapse" href="#status2" aria-expanded="true">
                                <p style="color:black;">{{ __('Status 2') }}</p>
                                <b class="caret mt-1"></b>
                            </a>
                           
                            <div  class="collapse show" id="status2" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            @forelse ($Web4NegociosStatus2 as $web4NegociosStatus2)
                                                
                                                    {{$web4NegociosStatus2->Titulo}}<br>

                                            @empty
                                                
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                              <a data-toggle="collapse" href="#filtro" aria-expanded="true">
                                <p style="color:black;">{{ __('Filtros ') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="filtro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">
                                                {{ __('Data de Inicio Ainda não Alcançada') }}
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="filtro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">
                                                {{ __('Data de Inicio - Hoje') }}
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="filtro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">
                                                {{ __('Data de Inicio - Ultrapassada') }}
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="filtro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">
                                                {{ __('Data de Conclusão - Ainda não Alcançada') }}
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="filtro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">
                                                {{ __('Data de Conclusão - Hoje') }}
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="filtro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">
                                                {{ __('Data de Conclusão - Ultrapassada') }}
                                            </p>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                 <a data-toggle="collapse" href="#negociocategoria" aria-expanded="true">
                                <p style="color:black;">{{ __('Categoria') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="negociocategoria" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                        @forelse ($Web4NegociosCategoria as $web4NegociosCategoria)

                                            {{$web4NegociosCategoria->Titulo}}
                                            
                                        @empty
                                            
                                        @endforelse
                                            
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <a data-toggle="collapse" href="#negocioacao" aria-expanded="true">
                                <p style="color:black;">{{ __('Ação') }}</p>
                                <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="negocioacao" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="#">
                                        
                                            @forelse ($Web4NegociosAcoes as $web4NegociosAcoes)
                                                {{$web4NegociosAcoes->Titulo}}<br>
                                            @empty
                                                
                                            @endforelse

                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                <a data-toggle="collapse" href="#negociogrupoadm" aria-expanded="true">
                                <p style="color:black;">{{ __('Grupo de Administradores') }}</p>
                            <b class="caret mt-1"></b>
                            </a>
                             <div  class="collapse show" id="negociogrupoadm" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                           @forelse ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                                               
                                                {{$web4AdministradoresGrupo->Nome}}

                                           @empty
                                               
                                           @endforelse
                                           
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                 <a data-toggle="collapse" href="#negociomotivo" aria-expanded="true">
                                <p style="color:black;">{{ __('Motivo') }}</p>
                                <b class="caret mt-1"></b>

                            </a>
                          

                            <div  class="collapse show" id="negociomotivo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            @forelse ($Web4NegociosMotivo as   $web4NegociosMotivo)
                                                
                                                {{$web4NegociosMotivo->Titulo}}

                                            @empty
                                                
                                            @endforelse
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

                <div  class="collapse show" id="negocio" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>

                             <a data-toggle="collapse" href="#negociomodulo" aria-expanded="true">
                               
                                <p style="color:black;">{{ __('Módulos') }}</p>
                            <b class="caret mt-1"></b>

                            </a>
                            <!--inicio-->
                
                            <div  class="collapse show" id="negociomodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                           <p style="color:black;">{{ __('Categorias') }}</p> 

                                        </a>
                                    </li>

                                </ul>
                            </div>

                            
                            <div  class="collapse show" id="negociomodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                             <p style="color:black;">{{ __('Ações') }}</p>

                                        </a>
                                    </li>

                                </ul>
                            </div>

                            
                            <div  class="collapse show" id="negociomodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                             <p style="color:black;">{{ __('Status') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            
                            <div  class="collapse show" id="negociomodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                             <p style="color:black;">{{ __('Status 2') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            
                            <div  class="collapse show" id="negociomodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Motivos') }}</p>

                                        </a>
                                    </li>

                                </ul>
                            </div>   

                            <!--fim-->
                        </li>

                    </ul>
                </div>
            </li>
            <!-- Fim do negocio-->

            <!--Inicio de Tarefas-->
            <li >
                <a data-toggle="collapse" href="#tarefa" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                </svg>
                    <span  class="nav-link-text">{{ __('Tarefas') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <p style="color:black;">{{ __('Listar todas') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                            
                                <p style="color:black;">{{ __('Cadastrar Tarefa') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                
                                <p style="color:black;">{{ __('Listar Apenas Não Finalizadas') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <p style="color:black;">{{ __('Calendário de conclusão') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                
                <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                                 <a data-toggle="collapse" href="#aquemsedestina" aria-expanded="true">

                                <p style="color:black;">{{ __('A quem se Destina') }}</p>

                                <b class="caret mt-1"></b>

                            </a>
                            <div  class="collapse show" id="aquemsedestina" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        @forelse ($Web4Administradores as $web4Administradores)
                                            <p style="color:black;">{{$web4Administradores->Usuario}}</p>
                                        @empty
                                            
                                        @endforelse
                                            
                                            
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            
                                <a data-toggle="collapse" href="#tarefafiltro" aria-expanded="true">
                                <p style="color:black;">{{ __('Filtros') }}</p>

                                <b class="caret mt-1"></b>
                            </a>

                             <div  class="collapse show" id="tarefafiltro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Finalizada') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="tarefafiltro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Não Finalizada') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="tarefafiltro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Finaliza Hoje') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="tarefafiltro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Finalização Atrasada') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="tarefafiltro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Executadas em Atraso') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                             <div  class="collapse show" id="tarefafiltro" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Executadas no Prazo') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                             
                                <p style="color:black;">{{ __('Categoria') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                             
                                <p style="color:black;">{{ __('Ação') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            
                            <a data-toggle="collapse" href="#tarefagrupoadm" aria-expanded="true">
                               
                                <p style="color:black;">{{ __('Grupo de Administradores') }}</p>
                                <b class="caret mt-1"></b>
                            </a>
                             <div  class="collapse show" id="tarefagrupoadm" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                            
                                                
                                                @forelse ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                                                    <p
                                                    style="color:black;">
                                                        {{$web4AdministradoresGrupo->Nome}}<br>
                                                    </p>
                                                @empty
                                                    
                                                @endforelse
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <p style="color:black;">{{ __('Motivo (execução)') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                               
                                <p style="color:black;">{{ __('Motivo (Finalização)') }}</p>
                            </a>
                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="tarefa" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                             <a data-toggle="collapse" href="#tarefamodulo" aria-expanded="true">
                              
                                <p style="color:black;">{{ __('Módulos') }}</p>

                            <b class="caret mt-1"></b>

                            </a>

                             <div  class="collapse show" id="tarefamodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Categorias') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div  class="collapse show" id="tarefamodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Ações') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div  class="collapse show" id="tarefamodulo" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Motivos') }}</p>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>
            <!--fim de tarefas-->
            <!--inicio de configurações -->
            <li >
                <a data-toggle="collapse" href="#configuracao" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
                    <span  class="nav-link-text">{{ __('configurações') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                

                   <div  class="collapse show" id="configuracao" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            
                             <a data-toggle="collapse" href="#configuracaoadministradores" aria-expanded="true">
                               
                                <p style="color:black;">{{ __('Administradores') }}</p>
                                 <b class="caret mt-1"></b>
                            </a>

                            <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Listar Todos') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">
                                        
                                            <p style="color:black;">{{ __('Cadastrar Novo') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                             <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a data-toggle="collapse" href="#configuracaoadministradoresgrupo" aria-expanded="true">
                                        

                                            <p style="color:black;">{{ __('Grupos') }}</p>

                                            <b class="caret mt-1"></b>
                                        </a>

                                         <div  class="collapse show" id="configuracaoadministradoresgrupo" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                    
                                                        <p style="color:black;">{{ __('Administrador Global') }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>  

                                        <div  class="collapse show" id="configuracaoadministradoresgrupo" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                    
                                                        <p style="color:black;">{{ __('Comercial') }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 

                                        <div  class="collapse show" id="configuracaoadministradoresgrupo" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                    
                                                        <p style="color:black;">{{ __('Revendas') }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 
                                    </li>
                                </ul>
                            </div>

                            <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                <ul class="nav pl-4">
                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                        <a  href="{{ route('profile.edit') }}">

                                              <a data-toggle="collapse" href="#configuracaoadministradoresdepartamento" aria-expanded="true"> 

                                            <p style="color:black;">{{ __('Departamentos') }}</p>
                                                <b class="caret mt-1"></b>

                                        </a>

                                         <div  class="collapse show" id="configuracaoadministradoresdepartamento" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                                
                                                        <p style="color:black;">{{ __('Web4Business') }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 

                                         <div  class="collapse show" id="configuracaoadministradoresdepartamento" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                                
                                                        <p style="color:black;">{{ __('Comercial') }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 

                                         <div  class="collapse show" id="configuracaoadministradoresdepartamento" aria-expanded="false" >
                                            <ul class="nav pl-4">
                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                    <a  href="{{ route('profile.edit') }}">
                                                                
                                                        <p style="color:black;">{{ __('Diretoria') }}</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 

                                    </li>

                                </ul>

                                <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                  <a data-toggle="collapse" href="#configuracaocargo" aria-expanded="true">

                                                <p style="color:black;">{{ __('Cargos') }}</p>
                                                <b class="caret mt-1"></b>

                                            </a>
                                            <!--inicio de cargo-->
                                            <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Vendedor') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div> 
                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Diretor') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Comprador') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Marketing') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Secretaria') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Compras') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Sócio') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Financeiro') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Gerente') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Proprietário') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>

                                                <div  class="collapse show" id="configuracaocargo" aria-expanded="false" >
                                                    <ul>
                                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                                            <a  href="{{ route('profile.edit') }}">
                                                                <p style="color:black;">{{ __('Outros') }}</p>
                                                            </a>
                                                        </li>
                                                    </ul> 
                                                </div>


                                            <!--fim de cargo-->
                                        </li>
                                    </ul>
                                </div>

                                <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                 <a data-toggle="collapse" href="#configuracaoestado" aria-expanded="true">                
                                                <p style="color:black;">{{ __('Estado') }}</p>
                                            <b class="caret mt-1"></b>

                                            </a>
                                            <div class="collapse show" id="configuracaoestado" aria-expanded="false">
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a data-toggle="collapse" href="#configuracaocentrooeste" aria-expanded="false">
                                                            <p style="color:black;">{{ __('Centro-Oeste') }}</p>
                                                            <b class="caret mt-1"></b>
                                                        </a>
                                                        <!--inicio -->
                                                        <div class="collapse show" id="configuracaocentrooeste" aria-expanded="false">
                                                            <ul class="nav pl-4">
                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                    <a href="{{ route('profile.edit') }}">
                                                                        <p style="color:black;">{{ __('DF - Distrito Federal') }}</p>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="collapse show" id="configuracaocentrooeste" aria-expanded="false">
                                                            <ul class="nav pl-4">
                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                    <a href="{{ route('profile.edit') }}">
                                                                        <p style="color:black;">{{ __('GO - Goiás') }}</p>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="collapse show" id="configuracaocentrooeste" aria-expanded="false">
                                                            <ul class="nav pl-4">
                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                    <a href="{{ route('profile.edit') }}">
                                                                        <p style="color:black;">{{ __('MT - Mato Grosso') }}</p>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div class="collapse show" id="configuracaocentrooeste" aria-expanded="false">
                                                            <ul class="nav pl-4">
                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                    <a href="{{ route('profile.edit') }}">
                                                                        <p style="color:black;">
                                                                            {{ __('MS - Mato Grosso
                                                                                                                                        do Sul') }}
                                                                        </p>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>


                                                        <!--fim-->
                                                        <!-- inicio nordeste-->
                                                           <div class="collapse show" id="estado" aria-expanded="false">
                                                                <ul class="nav pl-4">
                                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                        <a data-toggle="collapse" href="#configuracaonordeste" aria-expanded="false">
                                                                            <p style="color:black;">{{ __('Nordeste') }}</p>
                                                                            <b class="caret mt-1"></b>
                                                                        </a>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('AL - Alagoas') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('BA - Bahia') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('MA - Maranhão') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('PB - Paraiba') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('PE - Pernambuco') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('PI - PIAUI') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('RN - Rio Grande do Norte') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="configuracaonordeste" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('SE - Sergipe') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>


                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        <!-- fim nordeste-->
                                                        <!--inicio do norte-->
                                                            <div class="collapse show" id="estado" aria-expanded="false">
                                                                <ul class="nav pl-4">
                                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                        <a data-toggle="collapse" href="#confignorte" aria-expanded="false">

                                                                            <p style="color:black;">{{ __('Norte') }}</p>

                                                                            <b class="caret mt-1"></b>
                                                                        </a>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('AC - Acre') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('AP - Amapá') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('AM - Amazonas') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('PA - Pará') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('RO - Rondônia') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('RR - Roraima') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="confignorte" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('TO - Tocantins') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                    </li>

                                                                </ul>
                                                            </div>

                                                        <!--fim do norte-->

                                                        <!--inicio do sudeste-->
                                                        <div class="collapse show" id="estado" aria-expanded="false">
                                                            <ul class="nav pl-4">
                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                    <a data-toggle="collapse" href="#sudeste" aria-expanded="false">

                                                                        <p style="color:black;">{{ __('Sudeste') }}</p>

                                                                        <b class="caret mt-1"></b>
                                                                    </a>

                                                                    <div class="collapse show" id="sudeste" aria-expanded="false">
                                                                        <ul class="nav pl-4">
                                                                            <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                <a href="{{ route('profile.edit') }}">

                                                                                    <p style="color:black;">{{ __('ES - Espírito Santo') }}</p>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div class="collapse show" id="sudeste" aria-expanded="false">
                                                                        <ul class="nav pl-4">
                                                                            <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                <a href="{{ route('profile.edit') }}">

                                                                                    <p style="color:black;">{{ __('MG - Minas Gerais') }}</p>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div class="collapse show" id="sudeste" aria-expanded="false">
                                                                        <ul class="nav pl-4">
                                                                            <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                <a href="{{ route('profile.edit') }}">

                                                                                    <p style="color:black;">{{ __('RJ - Rio de Janeiro') }}</p>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>

                                                                    <div class="collapse show" id="sudeste" aria-expanded="false">
                                                                        <ul class="nav pl-4">
                                                                            <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                <a href="{{ route('profile.edit') }}">

                                                                                    <p style="color:black;">{{ __('SP - São Paulo') }}</p>
                                                                                </a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!--fim do sudeste-->
                                                        <!--inicio do sul-->

                                                            <div class="collapse show" id="estado" aria-expanded="false">
                                                                <ul class="nav pl-4">
                                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                        <a data-toggle="collapse" href="#sul" aria-expanded="false">
                                                                            <p style="color:black;">{{ __('Sul') }}</p>
                                                                            <b class="caret mt-1"></b>
                                                                        </a>

                                                                        <div class="collapse show" id="sul" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('PR - Paraná') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="sul" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('RS - Rio Grande do Sul') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                        <div class="collapse show" id="sul" aria-expanded="false">
                                                                            <ul class="nav pl-4">
                                                                                <li @if ($pageSlug == 'profile') class="active " @endif>
                                                                                    <a href="{{ route('profile.edit') }}">

                                                                                        <p style="color:black;">{{ __('SC - Santa Catarina') }}</p>
                                                                                    </a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>


                                                        <!--fim do sul-->
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div  class="collapse show" id="configuracaoadministradores" aria-expanded="false" >
                                    <ul class="nav pl-4">
                                        <li @if ($pageSlug == 'profile') class="active " @endif>
                                            <a  href="{{ route('profile.edit') }}">
                                                 <a data-toggle="collapse" href="#configuracaoadministradoresfiltro" aria-expanded="true">               
                                                <p style="color:black;">{{ __('Filtros') }}</p>

                                                <b class="caret mt-1"></b>
                                            </a>

                                            <div  class="collapse show" id="configuracaoadministradoresfiltro" aria-expanded="false" >
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a  href="{{ route('profile.edit') }}">
                                                            <a data-toggle="collapse" href="#configuracaoadministradoresfiltro" aria-expanded="true">               
                                                            <p style="color:black;">{{ __('Status - Ativado') }}</p>

                                                            <b class="caret mt-1"></b>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div  class="collapse show" id="configuracaoadministradoresfiltro" aria-expanded="false" >
                                                <ul class="nav pl-4">
                                                    <li @if ($pageSlug == 'profile') class="active " @endif>
                                                        <a  href="{{ route('profile.edit') }}">
                                                            <a data-toggle="collapse" href="#configuracaoadministradoresfiltro" aria-expanded="true">               
                                                            <p style="color:black;">{{ __('Status - Desativado') }}</p>

                                                            <b class="caret mt-1"></b>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </li>
                                    </ul>
                                </div>


                            </div> 
                        </li>

                    </ul>
                </div>

                
                 <div  class="collapse show" id="configuracao" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                              
                                <p style="color:black;">{{ __('Campanhas') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div  class="collapse show" id="configuracao" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                              
                                <p style="color:black;">{{ __('Informativos') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                
                 <div  class="collapse show" id="configuracao" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                             
                                <p style="color:black;">{{ __('E-mails') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div  class="collapse show" id="configuracao" aria-expanded="false" >
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a  href="{{ route('profile.edit') }}">
                             
                                <p style="color:black;">{{ __('Configurações') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>

                
                 

                            </li>
            
        </ul>
        
    </div>
</div>
