<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}"> <!-- Incluye los estilos de la sidebar -->
    <link rel="stylesheet" href="{{ asset('css/alumnos.css') }}">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<section>
        <div class="content">
            <div class="contact-wrapper">
                <h1 class="logo">Alumnos</h1>
                <div class="contact-form">
                    <h3>Alta de Alumnos</h3>
                    <form method="post" action="{{ route('AgregarAlumnos') }}" class="form">
                        @csrf
                        <p>
                            <label for="fullname">Nombre(s)</label>
                            <input type="text" name="nombre" id="fullname">
                        </p>
                        <p>
                            <label>Apellido Paterno</label>
                            <input type="text" name="apa">
                        </p>
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
                            <label for="Correo">Correo</label>
                            <input type="email" name="email" id="correo">
                        </p>
                        <p>
                            <label for="Sexo">Sexo</label>
                            <select name="sexo" id="sexo">
                                <option value="M">Masculino</option>
                                <option value="H">Femenino</option>
                            </select>
                        </p>
                        <p>
                            <label>Fecha Nac</label>
                            <input type="date" name="fec">
                        </p>
                        <p>
                            <label for="Sem">Semestre</label>
                            <select name="sem" id="sem">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </p>
                        <p>
                            <label for="nivel">Tipo</label>
                            <select name="tipo" id="tipo">
                                <option value="1">Puntos</option>
                                <option value="2">En curso</option>
                                <option value="3">Graduado</option>
                            </select>
                        </p>
                        <p>
                            <label for="carrera">Carrera</label>
                            <select name="carrera" id="carrera">
                                <option value="1">Sist. Comp</option>
                                 <option value="2">Industrial</option>
                                <option value="3">Gestión</option>
                            </select>
                        </p>
                        <input type="hidden" name="foto" value="foto.jpg">
                        <p class="block">
                            <button type="submit">
                                ACTUALIZAR
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection