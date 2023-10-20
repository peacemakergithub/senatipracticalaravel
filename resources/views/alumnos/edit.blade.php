<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar alumnos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/editaralumnos.css') }}">
</head>

<div class="container">
    <h2>Editar Alumno</h2>
    <form method="POST" action="{{ route('alumnos.update', $alumno->id) }}">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" value="{{ $alumno->dni }}" required>
        </div>
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $alumno->nombres }}" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $alumno->apellidos }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
</html>