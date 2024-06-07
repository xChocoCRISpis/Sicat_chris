<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
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
            <a href="{{ route('inicio') }}" class="option selected">
                <i class="fas fa-house" title="Inicio"></i>
                <h4>Inicio</h4>
            </a>
            <a href="{{ route('VerAlumnos') }}" class="option">
                <i class="fas fa-people-robbery" title="Actividades"></i>
                <h4>Actividades</h4>
            </a>
            <a href="#" class="option">
                <i class="fas fa-pen-to-square" title="Eventos"></i>
                <h4>Eventos</h4>
            </a>
            <a href="#" class="option">
                <i class="fab fa-gitter" title="Indicadores"></i>
                <h4>Indicadores</h4>
            </a>
            <a href="#" class="option">
                <i class="fab fa-leanpub" title="Reportes"></i>
                <h4>Reportes</h4>
            </a>
            <a href="#" class="option">
                <i class="fas fa-person-shelter" title="Perfil"></i>
                <h4>Perfil</h4>
            </a>
            <a href="#" class="option">
                <i class="fas fa-person-walking-arrow-right" title="Salir"></i>
                <h4>Salir</h4>
            </a>
        </div>
    </div>

    <main id="main_content">
        @yield('content')
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.getElementById('btn_open').addEventListener('click', function() {
            const menuSide = document.getElementById('menu_side');
            const mainContent = document.getElementById('main_content');
            menuSide.classList.toggle('active');
            mainContent.classList.toggle('shifted');
        });
    </script>
</body>
</html>
