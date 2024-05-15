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
                    {{ Form::open(['url' => 'ruta_a_tu_controlador', 'method' => 'post']) }}

                        <p>
                            <label>Apellido Materno</label>
                            <input type="text" name="ama">
                        </p>
                        <p>
                            <label>Num Control</label>
                            <input type="text" name="noc">
                        </p>
                        <p>
                            <label>Celular</label>
                            <input type="tel" name="phone">
                        </p>
                        <p>
                            <label>Correo</label>
                            <input type="email" name="affair">
                        </p>
                        <p>
                            <label>Sexo</label>
                            {{ Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], null, ['placeholder' => 'Seleccione Sexo']) }}
                        </p>
                        <p>
                            <label>Fecha Nac</label>
                            <input type="date" name="fec">
                        </p> 
                        <p>
                            <label>Semestre</label>
                            {{ Form::select('semestre', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'], null, ['placeholder' => 'Seleccione Semestre']) }}
                        </p>

                        <button type="submit">Enviar</button>

                    {{ Form::close() }}
                </div>

            </div>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
</div>