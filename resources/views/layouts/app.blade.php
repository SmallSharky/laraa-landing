<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <!-- Material Styles -->
    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->
    <link rel="stylesheet" href="{{asset('fonts/Roboto.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/MaterialIcons.css')}}">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    @yield('styles')


    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>-->
    <script type="text/javascript" src="{{ asset('js/MaterialButtons.js') }}"></script>

    @yield('scripts')

</head>
<body>
<div id="app">
    <nav class="navbar-fixed-top">
        <div class="nav-wrapper blue">
            <a href="/" class="brand-logo">SSFW</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Главная</a></li>
                <li><a href="/settings">Настройки</a></li>
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Войти</a></li>
                    <li><a href="{{ route('register') }}">Регистрация</a></li>
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
                    <li><a href="{{ route('login') }}">Войти</a></li>
                    <li><a href="{{ route('register') }}">Регистрация</a></li>
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

    @yield('content')
</div>


</body>
</html>
