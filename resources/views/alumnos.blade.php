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

            <a href="#" class="selected">
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
                    <h3>Filtros</h3>
                    <p>
                        <label for="Nombre">Nombre: </label>
                        {{$filtros['Nombre']}}
                        <label for="Semestre">Semestre: </label>
                        {{$filtros['Semestre']}}
                        <label for="Sexo">Sexo: </label>
                        {{$filtros['Sexo']}}
                        <label for="Carrera">Carrera: </label>
                        {{$filtros['Carrera']}}
                    <form action="">
                        <p>
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre">
                        </p>
                        <p>
                            <label for="Carrera">Carrera</label>
                            <select name="carrera" id="car">
                                <option value="0">Todos</option>
                                <option value="1">Sist. Comp</option>
                                <option value="2">Industrial</option>
                                <option value="3">Gestión</option>
                            </select>
                        </p>
                        <p>
                            <label for="Sem">Semestre</label>
                            <select name="sem" id="sem">
                                <option value="0">Todos</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </p>
                        <p>
                            <label for="Sexo">Sexo</label>
                            <select name="sexo" id="sexo">
                                <option value="X">Todos</option>
                                <option value="M">Masculino</option>
                                <option value="H">Femenino</option>
                            </select>
                        </p>
                        <button href="{{ route('VerAlumnos') }}"> Filtrar</button>
                    </form>
                    <div id="tabla-alumnos">
                        <table border ="5px">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Sexo</th>
                                <th>No. Control</th>
                                <th>Carrera</th>
                                <th>Semestre</th>                            </tr>
                            <tr>
                            @foreach($alumnos as $alumno)
                            <tr>
                                <td>{{ $alumno->nom_a }}</td>
                                <td>{{ $alumno->ApP }} {{ $alumno->ApM}}</td>
                                <td>{{ $alumno->sex }}</td>
                                <td>{{ $alumno->num_con }}</td>
                                <td>{{ $alumno->Carrera }}</td>
                                <td>{{ $alumno->sem}}</td>
                            </tr>
                            @endforeach
                            </tr> 
                        </table>
                    </div>
                    <h3>Agregar un alumno</h3>
                    <a href="{{ route('alumnos_alta') }}" class="btn">Alta alumno</a>
                </div>
                
            </div>
        </div>
    </main>
<script>
</script>
</body>
</html>
</div>


