@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<section>
    <main>
        <div class="content">
            <div class="contact-wrapper">
                <h1 class="logo">Alumnos</h1>
                <div class="contact-form">
                    <h3>Filtros</h3>
                    <form action="{{ route('alumnos') }}" method="GET">
                        <p>
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $filtros['Nombre'] }}">
                        </p>
                        <p>
                            <label for="Carrera">Carrera</label>
                            <select name="carrera" id="car">
                                <option value="0" {{ $filtros['Carrera'] == '0' ? 'selected' : '' }}>Todos</option>
                                <option value="1" {{ $filtros['Carrera'] == '1' ? 'selected' : '' }}>Sist. Comp</option>
                                <option value="2" {{ $filtros['Carrera'] == '2' ? 'selected' : '' }}>Industrial</option>
                                <option value="3" {{ $filtros['Carrera'] == '3' ? 'selected' : '' }}>Gestión</option>
                            </select>
                        </p>
                        <p>
                            <label for="Sem">Semestre</label>
                            <select name="sem" id="sem">
                                <option value="0" {{ $filtros['Semestre'] == '0' ? 'selected' : '' }}>Todos</option>
                                <option value="1" {{ $filtros['Semestre'] == '1' ? 'selected' : '' }}>1</option>
                                <option value="2" {{ $filtros['Semestre'] == '2' ? 'selected' : '' }}>2</option>
                                <option value="3" {{ $filtros['Semestre'] == '3' ? 'selected' : '' }}>3</option>
                            </select>
                        </p>
                        <p>
                            <label for="Sexo">Sexo</label>
                            <select name="sexo" id="sexo">
                                <option value="X" {{ $filtros['Sexo'] == 'X' ? 'selected' : '' }}>Todos</option>
                                <option value="M" {{ $filtros['Sexo'] == 'M' ? 'selected' : '' }}>Masculino</option>
                                <option value="H" {{ $filtros['Sexo'] == 'H' ? 'selected' : '' }}>Femenino</option>
                            </select>
                        </p>
                        <button type="submit">Filtrar</button>
                    </form>
                    <div id="tabla-alumnos">
                        <table border="5px">
                            <tr>
                                <th hidden>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Sexo</th>
                                <th>No. Control</th>
                                <th>Carrera</th>
                                <th>Semestre</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td hidden>{{ $alumno->id_alumno }}</td>
                                    <td>{{ $alumno->nom_a }}</td>
                                    <td>{{ $alumno->ApP }} {{ $alumno->ApM }}</td>
                                    <td>{{ $alumno->sex }}</td>
                                    <td>{{ $alumno->num_con }}</td>
                                    <td>{{ $alumno->Carrera }}</td>
                                    <td>{{ $alumno->sem }}</td>
                                    <td>
                                        <a href="{{ route('alumnos_edit', ['id_alumno' => $alumno->id_alumno]) }}" class="btn">EDITAR</a>
                                        <form action="{{ route('EliminarAlumno', ['id_alumno' => $alumno->id_alumno]) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn">DAR DE BAJA</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <h3>Agregar un alumno</h3>
                    <a href="{{ route('alumnos_alta') }}" class="btn">Alta alumno</a>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection
