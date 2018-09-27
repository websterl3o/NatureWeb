<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav> --}}

        <div class="menu-interno">
            @if (Route::has('login'))
                <div class="row row-simples">
                    <div class="col-md-2 links w-100 position-menu-left logo" style="text-align: center;">
                        <a class="sliding-middle-out item-menu" style="font-size: 31pt;text-transform: initial;" href="{{ url('/home') }}">(='X'=)</a>
                    </div>
                    <div class="col-md-8 links w-100 position-menu-left menu-item">
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                        <a class="sliding-middle-out item-menu" href="{{ url('/home') }}">TEsteLogo</a>
                    </div>
                    <div class="col-md-2 links w-100 position-menu-left dropdown-menu-item">
                        <div class="btn-group" role="group">
                            <button id="user-id-button" type="button" class="btn btn-secondary dropdown-toggle especial-button-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{Gravatar::get(Auth::user()->email)}}" class="m--img-rounded m--marginless user-pic" alt=""/>
                                <span class="user-details menu-item">
                                    {{ Auth::user()->name }}
                                </span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="user-id-button">
                                <a class="dropdown-item" href="#">Configurações</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>


        <main class="py-4 content">
            @yield('content')
        </main>
    </div>
</body>
</html>
