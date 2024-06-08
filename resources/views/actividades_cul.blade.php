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
@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<section>
    <main>
    @foreach ($actividades as $actividad)
                <div class="item" id="actd{{ $loop->iteration }}">
                    <h2>{{ $actividad["Nombre"] }}</h2>
                </div>
            @endforeach
    </main>
</section>
@endsection