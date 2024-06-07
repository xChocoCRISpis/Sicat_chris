<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <style>
        /* Estilos adicionales para la sidebar */
        .menu_side {
            position: fixed;
            width: 250px;
            height: 100%;
            background: #333;
            color: #fff;
            transition: transform 0.3s ease-in-out;
            transform: translateX(-250px);
        }
        .menu_side.active {
            transform: translateX(0);
        }
        main {
            margin-left: 0;
            transition: margin-left 0.3s ease-in-out;
        }
        main.shifted {
            margin-left: 250px;
        }
        .icon_menu {
            cursor: pointer;
        }
    </style>
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
