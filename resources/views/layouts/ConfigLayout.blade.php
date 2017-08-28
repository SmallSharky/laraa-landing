<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Настройки') }}</title>


    <!-- Styles -->
    <!-- Material Styles -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- <script src="{{asset('js/materialize.js')}}"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/MaterialButtons.js') }}"></script>

    @yield('scripts')

</head>
<body>
<div id="app">
    <!-- TODO: AJAX menu  -->
    <nav class="navbar-fixed-top">
        <div class="nav-wrapper blue">
            <a href="/" class="brand-logo" style="padding-left: 20px">SSFW</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Главная</a></li>
                <li><a href="/settings">Настройки</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else


                <!-- Dropdown Trigger -->
                    <a class='dropdown-button btn' href='#' data-activates='dropdown1'>

                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <!-- Dropdown Structure -->

                    <ul id='dropdown1' class='dropdown-content'>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>


                @endif
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="/">Главная</a></li>
                <li><a href="/settings">Настройки</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li>
                        <a href="{{ route('home') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Выйти
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>



                @endif
            </ul>
        </div>
    </nav>

    <div class="row">
        <!-- TODO: AJAX menu  -->


        <div class="col s12 m4 l4 left">

            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header">

                        <i class="material-icons">accessible</i>
                        Роли и права
                    </div>
                    <div class="collapsible-body">
                        <a href="/settings/roles">
                            <div class="black-text valign-wrapper">
                                <i class="material-icons" style="padding-right: 10px">create_new_folder</i>
                                Создание/изменение ролей
                            </div>
                        </a>
                    </div>
                    <div class="collapsible-body">
                        <a href="/settings/roles/assign">
                            <div class="black-text valign-wrapper">
                                <i class="material-icons" style="padding-right: 10px">attachment</i>
                                Назначение ролей
                            </div>
                        </a>
                    </div>


                </li>
            </ul>
        </div>

        <div class="col s12 l7 m7">
            <h4>@yield('header')</h4>
            @yield('content')
        </div>


    </div>


</div>
<!-- Scripts -->
<!-- Material JavaScripts -->

</body>
</html>
