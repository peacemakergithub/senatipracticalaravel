<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalles del Instructor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/instructor/editarinstructor.css') }}"></head>
<div class="container"> <h2>Detalles de instructor</h2>
    <p><strong>ID:</strong> {{ $instructor->id }}</p>
    <P><strong>Dni:</strong> {{ $instructor->dni }}</p>
    <p><strong>Nombres:</strong> {{ $instructor->nombres }}</p>
    <p><strong>Apellidos:</strong> {{ $instructor->apellidos }}</p>
    <p><strong>Genero:</strong> {{ $instructor->genero }}</p>
    <p><strong>Edad:</strong> {{ $instructor->edad }}</p>

    <a href="{{ route('instructores.index') }}" class="btn btn-primary">Volver</a>

</div>
</html>