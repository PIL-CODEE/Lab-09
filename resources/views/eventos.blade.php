<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA DE EVENTOS</title>
    <link href="{{ asset('css/eventos.css') }}" rel="stylesheet">
</head>
<body>
    <h1>EVENTOS</h1>
    <a href="{{ route('eventos.formulario') }}" class="button">Crear nuevo evento</a>

    <div class="eventos-wrapper">
    @foreach ($eventos as $evento)
    <div class="evento-container">
        <h2 class="evento-titulo">{{ $evento->titulo }}</h2>
        <p class="evento-descripcion">Descripción: {{ $evento->descripcion }}</p>
        <p class="evento-fecha">Fecha: {{ $evento->fecha }}</p>
    </div>
    @endforeach
    </div>
</body>
</html>

