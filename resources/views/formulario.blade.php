<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tu evento</title>
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
</head>
<body>
    <form action="{{ route('formulario.submit') }}" method="post" class="event-form">
        <h2>AGREGAR EVENTO</h2>
        @csrf
        <div class="form-group">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" required class="form-input">
        </div>

        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea id="descripcion" name="descripcion" required class="form-input"></textarea>
        </div>

        <div class="form-group">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" id="fecha" name="fecha" required class="form-input">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn create-button">CREAR</button>
            <button type="button" class="btn return-button" onclick="window.location='{{ route('eventos.eventos') }}'">EVENTOS</button>
        </div>
    </form>
</body>
</html>

