<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kuepa Test') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead">
        <div class="inner">
            <h3 class="masthead-brand"></h3>
            <nav class="nav nav-masthead justify-content-center">
                @auth
                    <a class="nav-link active" href="{{ url('/') }}">Opciones</a>
                @else
                    <a class="nav-link active" href="{{ url('/') }}">Inicio</a>
                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Registrarme</a>
                    @endif
                @endauth
            </nav>
        </div>
    </header>

    <div id="app">
        <div class="container">
            @yield('content')
        </div>
    </div>

</div>



</body>
</html>
