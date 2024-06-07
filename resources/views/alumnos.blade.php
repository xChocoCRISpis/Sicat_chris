@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <section>
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
    </section>
@endsection
<script>
</script>
</body>
</html>
</div>

<script src="js/script.js"></script>
    <script>
        document.getElementById('btn_open').addEventListener('click', function() {
            const menuSide = document.getElementById('menu_side');
            const mainContent = document.querySelector('main');
            menuSide.classList.toggle('active');
            if (menuSide.classList.contains('active')) {
                mainContent.style.marginLeft = '250px';
            } else {
                mainContent.style.marginLeft = '0';
            }
        });
    </script>
</body>
</html>