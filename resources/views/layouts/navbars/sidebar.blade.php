<link href="{{ asset('black') }}/css/sidebar.css)" rel="stylesheet">
<link href="{{ asset('black') }}/css/menu.css)" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="sidebar">
    <style>
        body {
            background: #EEE;
            overflow-x: hidden;
        }

        .clearfix:before,
        .clearfix:after {
            content: " ";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        .clearfix {
            *zoom: 1;
        }

        .container {
            position: relative;
            margin: 0px auto;
            padding: 50px 0;
            clear: both;
        }

        @media only screen and (min-width: 1200px) {
            .container {
                width: 1210px;
            }
        }

        @media only screen and (min-width: 960px) and (max-width: 1199px) {
            .container {
                width: 1030px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 959px) {
            .container {
                width: 682px;
            }
        }

        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .container {
                width: 428px;
                margin: 0 auto;
            }
        }

        @media only screen and (max-width: 479px) {
            .container {
                width: 310px;
                margin: 0 auto;
            }
        }



        .mcd-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            background: #FFF;
            /*height: 100px;*/
            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            

            /* == */
            width: 220px;
            /* == */
        }

        .mcd-menu li {
            position: relative;
            /*float:left;*/
        }

        .mcd-menu li a {
            display: block;
            text-decoration: none;
            padding: 12px 20px;
            color: #777;
            /*text-align: center;
  border-right: 1px solid #E7E7E7;*/

            /* == */
            text-align: left;
            height: 36px;
            position: Relative;
            border-bottom: 1px solid #EEE;
            /* == */
        }

        .mcd-menu li a i {
            /*display: block;
  font-size: 30px;
  margin-bottom: 10px;*/

            /* == */
            float: left;
            font-size: 20px;
            margin: 0 10px 0 0;
            /* == */

        }

        /* == */
        .mcd-menu li a p {
            float: left;
            margin: 0;
        }

        /* == */

        .mcd-menu li a strong {
            display: block;
            text-transform: uppercase;
        }

        .mcd-menu li a small {
            display: block;
            font-size: 10px;
        }

        .mcd-menu li a i,
        .mcd-menu li a strong,
        .mcd-menu li a small {
            position: static;

            transition: all 300ms linear;
            -o-transition: all 300ms linear;
            -ms-transition: all 300ms linear;
            -moz-transition: all 300ms linear;
            -webkit-transition: all 300ms linear;
        }

        .mcd-menu li:hover>a i {
            opacity: 1;
            -webkit-animation: moveFromTop 300ms ease-in-out;
            -moz-animation: moveFromTop 300ms ease-in-out;
            -ms-animation: moveFromTop 300ms ease-in-out;
            -o-animation: moveFromTop 300ms ease-in-out;
            animation: moveFromTop 300ms ease-in-out;
        }

        .mcd-menu li:hover a strong {
            opacity: 1;
            -webkit-animation: moveFromLeft 300ms ease-in-out;
            -moz-animation: moveFromLeft 300ms ease-in-out;
            -ms-animation: moveFromLeft 300ms ease-in-out;
            -o-animation: moveFromLeft 300ms ease-in-out;
            animation: moveFromLeft 300ms ease-in-out;
        }

        .mcd-menu li:hover a small {
            opacity: 1;
            -webkit-animation: moveFromRight 300ms ease-in-out;
            -moz-animation: moveFromRight 300ms ease-in-out;
            -ms-animation: moveFromRight 300ms ease-in-out;
            -o-animation: moveFromRight 300ms ease-in-out;
            animation: moveFromRight 300ms ease-in-out;
        }

        .mcd-menu li:hover>a {
            color: #e67e22;
        }

        .mcd-menu li a.active {
            position: fixed;
            color: #e67e22;
            border: 0;
            /*border-top: 4px solid #e67e22;
  border-bottom: 4px solid #e67e22;
  margin-top: -4px;*/
            box-shadow: 0 0 5px #DDD;
            -moz-box-shadow: 0 0 5px #DDD;
            -webkit-box-shadow: 0 0 5px #DDD;

            /* == */
            border-left: 4px solid #e67e22;
            border-right: 4px solid #e67e22;
            margin: 0 -4px;
            /* == */
        }

        .mcd-menu li a.active:before {
            content: "";
            position: absolute;
            /*top: 0;
  left: 45%;
  border-top: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/

            /* == */
            top: 42%;
            left: 0;
            border-left: 5px solid #e67e22;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            /* == */
        }

        /* == */
        .mcd-menu li a.active:after {
            content: "";
            position: absolute;
            top: 42%;
            right: 0;
            border-right: 5px solid #e67e22;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
        }

        /* == */

        @-webkit-keyframes moveFromTop {
            from {
                opacity: 0;
                -webkit-transform: translateY(200%);
                -moz-transform: translateY(200%);
                -ms-transform: translateY(200%);
                -o-transform: translateY(200%);
                transform: translateY(200%);
            }

            to {
                opacity: 1;
                -webkit-transform: translateY(0%);
                -moz-transform: translateY(0%);
                -ms-transform: translateY(0%);
                -o-transform: translateY(0%);
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes moveFromLeft {
            from {
                opacity: 0;
                -webkit-transform: translateX(200%);
                -moz-transform: translateX(200%);
                -ms-transform: translateX(200%);
                -o-transform: translateX(200%);
                transform: translateX(200%);
            }

            to {
                opacity: 1;
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%);
            }
        }

        @-webkit-keyframes moveFromRight {
            from {
                opacity: 0;
                -webkit-transform: translateX(-200%);
                -moz-transform: translateX(-200%);
                -ms-transform: translateX(-200%);
                -o-transform: translateX(-200%);
                transform: translateX(-200%);
            }

            to {
                opacity: 1;
                -webkit-transform: translateX(0%);
                -moz-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                transform: translateX(0%);
            }
        }



        .mcd-menu li ul,
        .mcd-menu li ul li ul {
            position: absolute;
            height: auto;
            min-width: 200px;
            padding: 0;
            margin: 0;
            background: #FFF;
            /*border-top: 4px solid #e67e22;*/
            opacity: 0;
            visibility: hidden;
            transition: all 300ms linear;
            -o-transition: all 300ms linear;
            -ms-transition: all 300ms linear;
            -moz-transition: all 300ms linear;
            -webkit-transition: all 300ms linear;
            /*top: 130px;*/
            z-index: 1000;

            /* == */
            left: 280px;
            top: 0px;
            border-left: 4px solid #e67e22;
            /* == */
        }

        .mcd-menu li ul:before {
            content: "";
            position: absolute;
            /*top: -8px;
  left: 23%;
  border-bottom: 5px solid #e67e22;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;*/

            /* == */
            top: 25px;
            left: -9px;
            border-right: 5px solid #e67e22;
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
            /* == */
        }

        .mcd-menu li:hover>ul,
        .mcd-menu li ul li:hover>ul {
            display: block;
            opacity: 1;
            visibility: visible;
            /*top: 100px;*/

            /* == */
            left: 250px;
            /* == */
        }

        /*.mcd-menu li ul li {
  float: none;
}*/
        .mcd-menu li ul li a {
            padding: 10px;
            text-align: left;
            border: 0;
            border-bottom: 1px solid #EEE;

            /* == */
            height: auto;
            /* == */
        }

        .mcd-menu li ul li a i {
            font-size: 16px;
            display: inline-block;
            margin: 0 10px 0 0;
        }

        .mcd-menu li ul li ul {
            left: 230px;
            top: 0;
            border: 0;
            border-left: 4px solid #e67e22;
        }

        .mcd-menu li ul li ul:before {
            content: "";
            position: absolute;
            top: 15px;
            /*left: -14px;*/
            /* == */
            left: -9px;
            /* == */
            border-right: 5px solid #e67e22;
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
        }

        .mcd-menu li ul li:hover>ul {
            top: 0px;
            left: 200px;
        }



        /*.mcd-menu li.float {
  float: right;
}*/
        .mcd-menu li a.search {
            /*padding: 29px 20px 30px 10px;*/
            padding: 10px 10px 15px 10px;
            clear: both;
        }

        .mcd-menu li a.search i {
            margin: 0;
            display: inline-block;
            font-size: 18px;
        }

        .mcd-menu li a.search input {
            border: 1px solid #EEE;
            padding: 10px;
            background: #FFF;
            outline: none;
            color: #777;

            /* == */
            width: 170px;
            float: left;
            /* == */
        }

        .mcd-menu li a.search button {
            border: 1px solid #e67e22;
            /*padding: 10px;*/
            background: #e67e22;
            outline: none;
            color: #FFF;
            margin-left: -4px;

            /* == */
            float: left;
            padding: 10px 10px 11px 10px;
            /* == */
        }

        .mcd-menu li a.search input:focus {
            border: 1px solid #e67e22;
        }


        .search-mobile {
            display: none !important;
            background: #e67e22;
            border-left: 1px solid #e67e22;
            border-radius: 0 3px 3px 0;
        }

        .search-mobile i {
            color: #FFF;
            margin: 0 !important;
        }


        @media only screen and (min-width: 960px) and (max-width: 1199px) {
            .mcd-menu {
                margin-left: 10px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 959px) {
            .mcd-menu {
                width: 200px;
            }

            .mcd-menu li a {
                height: 30px;
            }

            .mcd-menu li a i {
                font-size: 22px;
            }

            .mcd-menu li a strong {
                font-size: 12px;
            }

            .mcd-menu li a small {
                font-size: 10px;
            }

            .mcd-menu li a.search input {
                width: 120px;
                font-size: 12px;
            }

            .mcd-menu li a.search buton {
                padding: 8px 10px 9px 10px;
            }

            .mcd-menu li>ul {
                min-width: 180px;
            }

            .mcd-menu li:hover>ul {
                min-width: 180px;
                left: 200px;
            }

            .mcd-menu li ul li>ul,
            .mcd-menu li ul li ul li>ul {
                min-width: 150px;
            }

            .mcd-menu li ul li:hover>ul {
                left: 180px;
                min-width: 150px;
            }

            .mcd-menu li ul li ul li:hover>ul {
                left: 150px;
                min-width: 150px;
            }

            .mcd-menu li ul a {
                font-size: 12px;
            }

            .mcd-menu li ul a i {
                font-size: 14px;
            }
        }

        @media only screen and (min-width: 480px) and (max-width: 767px) {

            .mcd-menu {
                width: 50px;
            }

            .mcd-menu li a {
                position: relative;
                padding: 12px 16px;
                height: 20px;
            }

            .mcd-menu li a small {
                display: none;
            }

            .mcd-menu li a strong {
                display: none;
            }

            .mcd-menu li a:hover strong,
            .mcd-menu li a.active strong {
                display: block;
                font-size: 10px;
                padding: 3px 0;
                position: absolute;
                bottom: 0px;
                left: 0;
                background: #e67e22;
                color: #FFF;
                min-width: 100%;
                text-transform: lowercase;
                font-weight: normal;
                text-align: center;
            }

            .mcd-menu li .search {
                display: none;
            }

            .mcd-menu li>ul {
                min-width: 180px;
                left: 70px;
            }

            .mcd-menu li:hover>ul {
                min-width: 180px;
                left: 50px;
            }

            .mcd-menu li ul li>ul,
            .mcd-menu li ul li ul li>ul {
                min-width: 150px;
            }

            .mcd-menu li ul li:hover>ul {
                left: 180px;
                min-width: 150px;
            }

            .mcd-menu li ul li ul li>ul {
                left: 35px;
                top: 45px;
                border: 0;
                border-top: 4px solid #e67e22;
            }

            .mcd-menu li ul li ul li>ul:before {
                left: 30px;
                top: -9px;
                border: 0;
                border-bottom: 5px solid #e67e22;
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
            }

            .mcd-menu li ul li ul li:hover>ul {
                left: 30px;
                min-width: 150px;
                top: 35px;
            }

            .mcd-menu li ul a {
                font-size: 12px;
            }

            .mcd-menu li ul a i {
                font-size: 14px;
            }

        }

        @media only screen and (max-width: 479px) {
            .mcd-menu {
                width: 50px;
            }

            .mcd-menu li a {
                position: static;
                padding: 12px 16px;
                height: 20px;
            }

            .mcd-menu li a small {
                display: none;
            }

            .mcd-menu li a strong {
                display: none;
            }

            .mcd-menu li a:hover strong,
            .mcd-menu li a.active strong {
                display: block;
                font-size: 10px;
                padding: 3px 0;
                position: absolute;
                bottom: 0px;
                left: 0;
                background: #e67e22;
                color: #FFF;
                min-width: 100%;
                text-transform: lowercase;
                font-weight: normal;
                text-align: center;
            }

            .mcd-menu li .search {
                display: none;
            }

            .mcd-menu li>ul {
                min-width: 180px;
                left: 70px;
            }

            .mcd-menu li:hover>ul {
                min-width: 180px;
                left: 50px;
            }

            .mcd-menu li ul li>ul,
            .mcd-menu li ul li ul li>ul {
                min-width: 150px;
            }

            .mcd-menu li ul li:hover>ul {
                left: 180px;
                min-width: 150px;
            }

            .mcd-menu li ul li ul li>ul {
                left: 35px;
                top: 45px;
                border: 0;
                border-top: 4px solid #e67e22;
            }

            .mcd-menu li ul li ul li>ul:before {
                left: 30px;
                top: -9px;
                border: 0;
                border-bottom: 5px solid #e67e22;
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
            }

            .mcd-menu li ul li ul li:hover>ul {
                left: 30px;
                min-width: 150px;
                top: 35px;
            }

            .mcd-menu li ul a {
                font-size: 12px;
            }

            .mcd-menu li ul a i {
                font-size: 14px;
            }

        }
    </style>

    <div class="logo">

    </div>
    <div class="sidebar">

    
    <ul class="mcd-menu">
        <li>
            <a href="{{route('home')}}">
                <i class="fa fa-home"></i>
                <strong>Inicio</strong>
            </a>
        </li>
        <li>
            <a href="{{route('Empresa.index')}}">
                <i class="fa fa-comments-o"></i>
                <strong>Empresa</strong>
            </a>
            <ul>
                <li><a href="{{route('Empresa.index')}}"><i class="fa fa-globe"></i>Listar Todos</a></li>
                <li><a href="{{route('Empresa.create')}}"><i class="fa fa-globe"></i>Cadastrar Todas</a></li>
                <li>
                    <a href="#"><i class="fa fa-group"></i>Usuário</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-female"></i>Listar Todos</a></li>
                        <li><a href=""><i class="fa fa-female"></i>Cadastar Novo</a></li>
                        <li>
                            <a href="#"><i class="fa fa-male"></i>Cargos</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>Vendedor</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Diretor</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Comprador</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Marketing</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Secretaria</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Compras</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Sócio</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Financeiro</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Gerente</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Proprietário</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Outros</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-group"></i>Pessoas</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-female"></i>Listar Todos</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Cadastar Novo</a></li>
                        <li>
                            <a href="#"><i class="fa fa-male"></i>Cargos</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>Vendedor</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Diretor</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Comprador</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Marketing</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Secretaria</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Compras</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Sócio</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Financeiro</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Gerente</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Proprietário</a></li>
                                <li><a href="#"><i class="fa fa-tasks"></i>Outros</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-female"></i>Categorias</a>

                </li>

                <li><a href="#"><i class="fa fa-female"></i>Segmentos</a>

                </li>


                <li>
                    <a href="#"><i class="fa fa-male"></i>Responsavel</a>
                    <ul>
                        @forelse ($Web4Administradores as $web4Administradores)
                            <li><a href="#"><i class="fa fa-globe"></i>{{ $web4Administradores->Nome }}</a></li>

                        @empty
                            <h6>não dados encontrado</h6>
                        @endforelse
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-male"></i>Grupo de Administradores</a>
                    <ul>
                        @forelse ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                            <li><a href="#"><i class="fa fa-globe"></i>{{ $web4AdministradoresGrupo->Nome }}</a>
                            </li>

                        @empty
                            <h6>não dados encontrado</h6>
                        @endforelse
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-male"></i>Estado</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-globe"></i>Centro-Oeste</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>DF - Distrito Federal'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>GO - Goiás'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>MT - Mato Grosso'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>DF - MS - Mato Grosso do Sul'</a>
                            </ul>
                        </li>

                        <li><a href="#"><i class="fa fa-globe"></i>Nordeste</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>BA - Bahia'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>MA - Maranhão'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>PB - Paraiba'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>PE - Pernambuco'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>PB - PI - PIAUI'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>RN - Rio Grande do Norte'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>SE - Sergipe'</a>

                            </ul>
                        </li>

                        <li><a href="#"><i class="fa fa-globe"></i>Norte</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>AC - Acre'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>AP - Amapá'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>AM - Amazonas'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>PA - Pará'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>RO - Rondônia'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>RR - Roraima'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>TO - Tocantins'</a>

                            </ul>
                        </li>

                        <li><a href="#"><i class="fa fa-globe"></i>Sudeste</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>ES - Espírito Santo'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>MG - Minas Gerais</a>
                                <li><a href="#"><i class="fa fa-globe"></i>RJ - Rio de Janeiro'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>SP - São Paulo</a>
                            </ul>
                        </li>

                        <li><a href="#"><i class="fa fa-globe"></i>Sul</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-globe"></i>PR - Paraná'</a>
                                <li><a href="#"><i class="fa fa-globe"></i>RS - Rio Grande do Sul</a>
                                <li><a href="#"><i class="fa fa-globe"></i>SC - Santa Catarina'</a>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-globe">
                        </i>Filtros</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-globe">Status - Ativado</i></a>
                        <li><a href="#"><i class="fa fa-globe"></i>Status - Desativado</a>

                    </ul>
                </li>

        </li>
        <li><a href="#"><i class="fa fa-globe">
                </i>Módulos</a>
            <ul>
                <li><a href="#"><i class="fa fa-globe">Categorias</i></a>
                <li><a href="#"><i class="fa fa-globe"></i>Segmentos</a>

            </ul>
        </li>
    </ul>
    </li>
    <li>
        <a href="{{route('Negocio.index')}}">
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-currency-dollar" viewBox="0 0 16 16">
                    <path
                        d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438
                            3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07
                            1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27
                            3.156 0 1.454.966 2.483 2.661 
                            2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616
                                0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 
                            0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                </svg>
                Negócios
            </strong>
        </a>

        <ul>
            <li><a href="#"><i class="fa fa-globe"></i>Listar Todos</a></li>
            <li><a href="#"><i class="fa fa-globe">Listar Sem Responsáveis</i></a>
            <li><a href="#"><i class="fa fa-globe">Funil</i></a>
            <li><a href="#"><i class="fa fa-globe">Cadastrar Novo</i></a>
            <li>
                <a href="#"><i class="fa fa-male"></i>Responsável</a>
                <ul>
                    @forelse ($Web4Administradores as $web4Administradores)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4Administradores->Nome }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Etapas</a>
                <ul>
                    @forelse ($Web4NegociosEtapa as $web4NegociosEtapa)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4NegociosEtapa->Titulo }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Status</a>
                <ul>
                    @forelse ($Web4NegociosStatus as $web4NegociosStatus)
                        <li><a href="#"><i
                                    class="fa fa-globe"></i>{{ $web4NegociosStatus->CodigoImportacao }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Status 2</a>
                <ul>
                    @forelse ($Web4NegociosStatus2 as $web4NegociosStatus2)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4NegociosStatus2->Titulo }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li><a href="#"><i class="fa fa-globe"></i>Filtros</a>
                <ul>
                    <li><a href="#"><i class="fa fa-globe">Data de Inicio Ainda não Alcançada</i></a></li>
                    <li><a href="#"><i class="fa fa-globe">Data de Inicio - Hoje</i></a></li>
                    <li><a href="#"><i class="fa fa-globe">Data de Inicio - Ultrapassada</i></a></li>
                    <li><a href="#"><i class="fa fa-globe">Data de Conclusão - Ainda não Alcançada</i></a></li>
                    <li><a href="#"><i class="fa fa-globe">Data de Conclusão - Hoje</i></a></li>
                    <li><a href="#"><i class="fa fa-globe">Data de Conclusão - Ultrapassada</i></a></li>
                </ul>

            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Categoria</a>
                <ul>
                    @forelse ($Web4NegociosCategoria as $web4NegociosCategoria)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4NegociosCategoria->Titulo }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Ação</a>
                <ul>
                    @forelse ($Web4NegociosAcoes as $web4NegociosAcoes)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4NegociosAcoes->Titulo }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Grupo de Administradores</a>
                <ul>
                    @forelse ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4AdministradoresGrupo->Nome }}</a>
                        </li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Motivo</a>
                <ul>
                    @forelse ($Web4NegociosMotivo as $web4NegociosMotivo)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4NegociosMotivo->Titulo }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Módulos</a>
                <ul>


                    <li><a href="#"><i class="fa fa-globe"></i>Categorias</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Ações</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Status</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Status 2</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Motivos</a></li>


                </ul>
            </li>





        </ul>
    </li>
    <li>
        <a href="{{route('Tarefa.index')}}">
            <i class="fa fa-envelope-o"></i>
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path
                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                    <path
                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 
                            0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147
                             1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5
                              0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5
                               0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                </svg>
                Tarefas
            </strong>
        </a>
        <ul>
            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Listar Todas
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Cadastrar Tarefa
                    </strong>
                </a>
            </li>


            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Listar Apenas Não Finalizadas
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Calendário de conclusão
                    </strong>
                </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>A quem se Destina</a>
                <ul>
                    @forelse ($Web4Administradores as $web4Administradores)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4Administradores->Usuario }}</a></li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Filtros</a>
                <ul>


                    <li><a href="#"><i class="fa fa-globe"></i>Finalizada</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Não Finalizada</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Finaliza Hoje</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Finalização Atrasada</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Executadas em Atraso</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i>Executadas no Prazo</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Categoria
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Ação
                    </strong>
                </a>
            </li>

            <li>
                <a href="#"><i class="fa fa-male"></i>Grupo de Administradores</a>
                <ul>
                    @forelse ($Web4AdministradoresGrupo as $web4AdministradoresGrupo)
                        <li><a href="#"><i class="fa fa-globe"></i>{{ $web4AdministradoresGrupo->Nome }}</a>
                        </li>

                    @empty
                        <h6>não dados encontrado</h6>
                    @endforelse
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Motivo (execução)
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Motivo (Finalização)
                    </strong>
                </a>
            </li>


            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Módulos
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Categorias
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Ações
                    </strong>
                </a>
            </li>

            <li>
                <a href="">
                    <i class="fa fa-envelope-o"></i>
                    <strong>
                        Motivos
                    </strong>
                </a>
            </li>

        </ul>
    </li>

    <li>
        <a href="">
            <i class="fa fa-envelope-o"></i>
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-gear-wide" viewBox="0 0 16 16">
                    <path
                        d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z" />
                </svg>
                Config do Sistema

            </strong>

        </a>

    </li>

    <li>
        <a href="">
            <i class="fa fa-envelope-o"></i>
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path
                        d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                    <path
                        d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 
                            0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147
                             1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5
                              0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5
                               0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                </svg>
                Relatórios
            </strong>
        </a>
    </li>

    </ul>
</div>

</div>
