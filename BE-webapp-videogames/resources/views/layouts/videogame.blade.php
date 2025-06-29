<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('storage/log/logo_game.svg') }}">
    <title>{{ config('GameDB', 'GameDB') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Rubik:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <style>
        :root {
            --main-bg: #121212;
            --accent-color: #00aaff;
            --hover-color: #0077cc;
            --text-color: #f1f1f1;
            --dark-gray: #1c1c1c;
        }

        body {
            margin: 0;
            background: var(--main-bg);
            color: var(--text-color);
            font-family: 'Rubik', sans-serif;
        }

        .navbar {
            background: var(--dark-gray);
            border-bottom: 2px solid var(--accent-color);
            box-shadow: 0 0 10px rgba(0, 170, 255, 0.2);
        }

        .navbar-brand {
            color: var(--accent-color);
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-brand img {
            height: 35px;
        }

        .nav-link {
            color: var(--accent-color) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--hover-color) !important;
            text-shadow: 0 0 5px var(--hover-color);
        }

        .dropdown-menu {
            background-color: #1a1a1a;
            border: none;
        }

        .dropdown-item {
            color: var(--accent-color);
        }

        .dropdown-item:hover {
            background-color: #2b2b2b;
            color: var(--hover-color);
        }

        main {
            padding: 2rem 0;
        }

        .icon-link img {
            height: 24px;
            
        }

        .btn-custom {
            background-color: var(--accent-color);
            color: #000;
            font-weight: bold;
            border: none;
        }

        .btn-custom:hover {
            background-color: var(--hover-color);
            color: #fff;
        }

        .logo_gamedb img {
            width: 15%;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('storage/log/logo_game.svg') }}" alt="GameDB Logo">
                    GameDB
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link icon-link" href="{{ url('/') }}">
                                <img src="{{ asset('storage/log/logo_home1.svg') }}" alt="Home"> Home
                            </a>
                        </li>
                    </ul>


                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link icon-link" href="{{ route('login') }}">
                                    <img src="{{ asset('storage/log/logo_log-In.svg') }}" alt="Login">Login
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link icon-link" href="{{ route('register') }}">
                                        <img src="{{ asset('storage/log/logo_register.svg') }}" alt="Register">Registrazione
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    👤 {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('dashboard') }}">🎮 Dashboard</a>
                                    <a class="dropdown-item" href="{{ url('profile') }}">⚙️ Profilo</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        🚪 Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container">
            @yield('content')
        </main>
    </div>
</body>

</html>