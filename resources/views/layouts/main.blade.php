<html>
<head>
    <meta charset='utf-8'/>
    <title>Мой сайт</title>
    <link rel="stylesheet" href={{asset('css/main.css')}}/>
    <link rel="stylesheet" href={{asset('css/app.css')}}/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href={{ elixir('css/app.css') }} rel="stylesheet">
</head>
<body>
<script src="{{ elixir('js/app.js') }}"></script>
<div id="header" class="header">
    <h1> @yield('header')</h1>
</div>
<div id="content" class="content">
    @yield('content')
</div>
<div id="footer" class="footer">
    @yield('footer')
</div>
</body>
</html>