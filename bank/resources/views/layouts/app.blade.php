<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <nav class="navbar navbar-expand-lg">
                    <h1>Bankas U5</h1>
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNav">

                            @if (Auth::check() && Auth::user()->name == 'Admin')
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin-index')}}">Pagrindinis puslapis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href=" {{route('admin-create')}} ">Naujas klientas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin-showAll')}}">Visi klientai</a>
                                </li>
                            </ul>
                            @endif

                            @if (Auth::check() && Auth::user()->name !== 'Admin')
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('client-index')}}">Pagrindinis puslapis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('client-create')}}">Sukurti nauja sąskaita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('client-show')}}">Visos sąskaitos</a>
                                </li>
                            </ul>
                            @endif

                        </div>
                    </div>
                </nav>

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



                            
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}




                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @include('layouts.error')
            @yield('content')
        </main>
    </div>
</body>

</html>
