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

    <!-- Scripts y estilos -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <div id="app">
        <nav class="navbar p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a class="text-white font-bold text-lg" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <div>
                    <ul class="flex gap-4">
                        @auth
                            @if (Auth::user()->tipo_usuario === 'emprendedor')
                                <li>
                                    <a class="text-white hover:underline" href="{{ route('proyectos.create') }}">📌 Publicar Proyecto</a>
                                </li>
                            @endif

                            @if (Auth::user()->tipo_usuario === 'donante')
                                <li>
                                    <a class="text-white hover:underline" href="{{ route('donaciones.index') }}">💰 Explorar Proyectos</a>
                                </li>
                            @endif
                        @endauth

                        @guest
                            @if (Route::has('login'))
                                <li><a class="text-white hover:underline" href="{{ route('login') }}">Ingresar</a></li>
                            @endif
                            @if (Route::has('register'))
                                <li><a class="text-white hover:underline" href="{{ route('register') }}">Registrarse</a></li>
                            @endif
                        @else
                            <li class="relative">
                                <a href="#" class="text-white hover:underline" role="button" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu absolute right-0 mt-2 bg-white shadow rounded">
                                    <a class="block px-4 py-2 text-sm text-gray-700" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 container mx-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>
