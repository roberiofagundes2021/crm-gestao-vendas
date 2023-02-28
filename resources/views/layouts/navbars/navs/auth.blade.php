<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent m-1 position-fixed">
    <div class="container-fluid" style="background:#FFF; m-4">
        <img src="{{ asset('black') }}/imagem/logo.PNG" alt="140px" style="height:70px;">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                </button>
            </div>


        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>

        </button>

        <span <i class="el el-align-center ml-5">Negociações por período</i></span>

        <div class="collapse navbar-collapse m-0 p-1 " id="navigation">
            <ul class="navbar-nav ml-auto ml-1 md-1 ">

                <!-- inicio de dia -->
                <li class="search-bar input-group p-0">
                    <button type="button" class="btn btn-sm btn-warning">Dia
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-4-circle" viewBox="0 0 16 16">
                            <path
                                d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                        </svg>
                    </button>
                </li>
                <!-- fim de dia-->

                <!-- inicio de futuro -->
                <li class="search-bar input-group p-0">
                    <button type="button" class="btn btn-sm btn-primary">Futuras
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-4-circle" viewBox="0 0 16 16">
                            <path
                                d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de notificação-->

                <!--Inicio de favorito-->
                <li class="search-bar input-group p-0">
                    <button type="button" class="btn btn-sm btn-danger mt-0 ml-0">Atrasadas
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-4-circle" viewBox="0 0 16 16">
                            <path
                                d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de favorito-->

                <!--Inicio de bate papo-->
                <li class="search-bar input-group p-0">
                    <button type="button" class="btn btn-sm   btn-success">Concluidas
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-4-circle" viewBox="0 0 16 16">
                            <path
                                d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de bate papo-->


                <ul class="dropdown-menu dropdown-navbar ml-1 mr-1 pl-1">

                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <div class="photo" style="color:#000">
                                <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Profile Photo') }}">
                            </div>
                            <b class="caret d-none d-lg-block d-xl-block"></b>
                            <p class="d-lg-none">{{ __('Sair') }}</p>
                        </a>
                        <ul class="dropdown-menu dropdown-navbar">
                            <li class="nav-link">
                                <a href="{{ route('profile.edit') }}"
                                    class="nav-item dropdown-item">{{ __('Perfil') }}</a>
                            </li>
                            <li class="nav-link">
                                <a href="#" class="nav-item dropdown-item">{{ __('Configurações') }}</a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="nav-link">
                                <a href="{{ route('logout') }}" class="nav-item dropdown-item"
                                    onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>



        <!--inicio dos botões -->
        <div class="collapse navbar-collapse mr=-12 ml=-10 " id="navigation">
            <ul class="navbar-nav ml-auto  mr=-12 ml=-10 pl-0">
                <!--Inicio de pesquisar-->
                <li class="search-bar input-group p-0">
                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397
                            1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1
                                0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0
                                0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de pesquisar-->

                <!--Inicio notificação-->
                <li class="search-bar input-group p-0">
                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 
                            2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0
                             .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663
                              2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134
                               8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8
                                1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 
                                10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0
                                 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de notificação-->

                <!--Inicio de favorito-->
                <li class="search-bar input-group p-0">
                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-star" viewBox="0 0 16 16">
                            <path
                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de favorito-->

                <!--Inicio de bate papo-->
                <li class="search-bar input-group p-0">
                    <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        </svg>
                    </button>
                </li>
                <!--Fim de bate papo-->


                <ul class="dropdown-menu dropdown-navbar">
                    <li class="nav-link">
                        <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Perfil') }}</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="nav-item dropdown-item">
                            {{ __('Configurações') }}

                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link">
                        <a href="{{ route('logout') }}" class="nav-item dropdown-item"
                            onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                    </li>
                </ul>

                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo" style="color:#000">
                            <img src="{{ asset('black') }}/img/anime3.png" alt="{{ __('Profile Photo') }}">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">{{ __('Sair') }}</p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link">
                            <a href="{{ route('profile.edit') }}"
                                class="nav-item dropdown-item">{{ __('Perfil') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">{{ __('Configurações') }}</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-link">
                            <a href="{{ route('logout') }}" class="nav-item dropdown-item"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

        <!--fim dos botões-->
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup"
                    placeholder="{{ __('SEARCH') }}">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
    </div>
</div>
