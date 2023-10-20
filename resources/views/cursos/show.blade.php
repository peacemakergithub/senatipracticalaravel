<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalles de Curso</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cursos/detallescursos.css') }}"></head>
<div class="container">
    <h2>Detalles del Curso</h2>
    <p><strong>ID:</strong> {{ $curso->id }}</p>
    <p><strong>Nombre:</strong> {{ $curso->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $curso->descripcion }}</p>
    <p><strong>Duración (horas):</strong> {{ $curso->duracion_horas }}</p>
    <p><strong>Fecha de Inicio:</strong> {{ $curso->fecha_inicio }}</p>
    <p><strong>Nivel:</strong> {{ $curso->nivel }}</p>
    <p><strong>Precio:</strong> {{ $curso->precio }}</p>
    <p><strong>Idioma:</strong> {{ $curso->idioma }}</p>

    <a href="{{ route('cursos.index') }}" class="btn btn-primary">Volver</a>
</div>
</html>