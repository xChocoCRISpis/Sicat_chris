<link rel="stylesheet" href="{{ asset('css/alumnos.css') }}">

<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
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
    
    <main>
        <div class="content">
            <div class="item" id="actd1">
                <h2>Danza</h2>
            </div>
            <div class="item" id="actd2">
                <h2>Música</h2>
            </div>
            <div class="item" id="actd3">
                <h2>Otro</h2>
            </div>
            <div class="item" id="actd4">
                <h2></h2>
            </div>
            <div class="item" id="actd5">
                <h2></h2>
            </div>
            <div class="item" id="actd6">
                <h2></h2>
            </div>

        </div>
    </main>