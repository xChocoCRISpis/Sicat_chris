<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="{{ asset('css/alumnos.css') }}">
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

            <a href="#">
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
            <div class="contact-wrapper">
                <h1 class="logo">Alumnos</h1>
                <div class="contact-form">
                    <h3>Alta de Alumnos</h3>
                    <form action="">
                        <p>
                            <label for="fullname">Nombre(s)</label>
                            <input type="text" name="fullname" id="fullname">
                        </p>
                        <p>
                            <label>Apellido Paterno</label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Celular</label>
                            <input type="tel" name="phone">
                        </p>
                        <p>
                            <label>Correo</label>
                            <input type="text" name="affair">
                        </p>
                        <p class="block">
                            <label>Notas</label>
                            <textarea name="message" rows="3"></textarea>
                        </p>
                        <p class="block">
                            <button type="submit">
                                Dar de Alta
                            </button>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
</div>