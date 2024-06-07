<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}"> <!-- Incluye los estilos de la sidebar -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <header>
            <div class="icon_menu">
                <i class="fas fa-bars" id="btn_open"></i>
                <h2>SICAT</h2>
            </div>
        </header>
    
        <div class="menu_side" id="menu_side">
            <div class="name_page">
                <i class="fas fa-pen-nib"></i>
                <h4>SICAT</h4>
            </div>
            <div class="options_menu">
                <a href="{{ route('inicio') }}" class="selected">
                    <div class="option">
                        <i class="fas fa-house" title="Inicio"></i>
                        <h4>Inicio</h4>
                    </div>
                </a>
                <a href="{{ route('VerAlumnos') }}">
                    <div class="option">
                        <i class="fas fa-people-robbery" title="Actividades"></i>
                        <h4>Actividades</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="option">
                        <i class="fas fa-pen-to-square" title="Eventos"></i>
                        <h4>Eventos</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="option">
                        <i class="fab fa-gitter" title="Indicadores"></i>
                        <h4>Indicadores</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="option">
                        <i class="fab fa-leanpub" title="Reportes"></i>
                        <h4>Reportes</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="option">
                        <i class="fas fa-person-shelter" title="Perfil"></i>
                        <h4>Perfil</h4>
                    </div>
                </a>
                <a href="#">
                    <div class="option">
                        <i class="fas fa-person-walking-arrow-right" title="Salir"></i>
                        <h4>Salir</h4>
                    </div>
                </a>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    @yield('js')
</body>
</html>
