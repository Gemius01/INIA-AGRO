<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
div.gallery {
    border: 1px solid #ccc;
}
div.gallery:hover {
    border: 1px solid #777;
}
div.gallery img {
    width: 100%;
    height: auto;
}
div.desc {
    padding: 15px;
    text-align: center;
}
* {
    box-sizing: border-box;
}
.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}
@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}
@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}
.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Agrometeorológico
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @can('users.index')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Gestion Usuarios</a>
                        </li>
                        @endcan
                        @can('macrozonas.index')
                        <li class="nav-item"><a class="nav-link" href="{{ route('macrozonas.index') }}">Gestión Macrozona</a></li>
                        @endcan
                        @can('rubros.index')
                        <li class="nav-item"><a class="nav-link" href="{{ route('rubros.index') }}">Gestión Rubros</a></li>
                        @endcan
                        @can('boletines.index')
                        <li class="nav-item"><a class="nav-link" href="{{ route('publicaciones.index') }}">Gestión Boletín</a></li>
                        @endcan
                         @can('regiones.index')
                        <li class="nav-item"><a class="nav-link" href="{{ route('regiones.index') }}">Gestión Región</a></li>
                        @endcan
                         @can('colaboradores.index')
                        <li class="nav-item"><a class="nav-link" href="{{ route('colaboradores.index') }}">Colaboradores</a></li>
                        @endcan
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->id != 1)
                                    <a class="dropdown-item" href="{{ route('users.showByUser', encrypt(Auth::user()->id)) }}"
                                       >
                                        Perfil
                                    </a>
                                    @else
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @if(session('info'))
            <div class="container">
                <div class="alert alert-success">
                    {{ session('info') }}
                </div>
            </div>
            @endif
            @if(session('info-danger'))
            <div class="container">
                <div class="alert alert-danger">
                    {!! session('info-danger') !!}
                </div>
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
