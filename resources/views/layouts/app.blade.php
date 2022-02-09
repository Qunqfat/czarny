<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script>alert('ala')</script> --}}
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #container
        {
            width: 920px;
            margin-left: auto;
            margin-right: auto;
        }
        #logo
        {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px;
        }
        #nav
        {
            float: left;
            background-color: lightgray;
            width: 120px;
            min-height: 620px;
            padding: 10px;
        }
        #content
        {
            float: left;
            padding: 20px;
            width: 680px;
        }
        #ad
        {
            float: left;
            width: 120px;
            min-height: 620px;
            padding: 10px;
            background-color: lightgray;
        }
        #footer
        {
            clear: both;
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px;
        }
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @can('isAdmin')
                                        <a class="dropdown-item" href="/users">Użytkownicy</a>
                                        <a class="dropdown-item" href="{{ route('equipment.index') }}">Przedmioty</a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@auth
<div id="container">

    <div id="logo">
        <h1><a href="/home">Miecze i sandały </a></h1>
    </div>

    <div id="nav">
        Życie: 123<br /><br />
        Energia: 3123<br /><br />
        Doświadczenie: 12/100 <br /><br />
        Złoto: 1.000.000 <br /><br />
    </div>


    <div id="content">
        @yield('myContent')

    </div>


    @section('ad')
    <div id="ad">
        <a href="master">Teściki</a> <br/>
        <h3>Postać</h3>
            <a href="equipment">Ekwipunek</a> <br/>
            <a href="stats">Statystyki</a> <br/>
            <a href="rest">Odpoczynek</a> <br/>
        <h3>Pojedynki</h3>
            <a href="monsters">Potwory</a> <br />
            <a href="characters">Postacie</a> <br />
            <a href="fights">Pojedynki</a><br />
            <a href="animals">Hodowla</a> <br />
        <h3>Rynek</h3>
        <a href="shop">Miejski Rynek</a> <br />
        <a href="privateHandel">Prywatny Handel</a> <br />
        <a href="playerShop">Stragany Graczy</a> <br />
        <h3>Miasto</h3>
        <a href="news">Wieści</a> <br />
        <a href="king">Król</a> <br />
        <a href="jobs">Praca</a> <br />
        <h3>Gildia</h3>
        <a href="guilds">Lista Gidlii</a> <br />
    </div>
    @show

    <div id="footer">
        <h2>Miecze i sandały &copy; Wszelkie prawa zastrzeżone</h2>
    </div>

</div>

@endauth


        <main class="py-4">
            @yield('content')

        </main>
    </div>
</body>
</html>
