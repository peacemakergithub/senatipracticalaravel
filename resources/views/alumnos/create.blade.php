<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Alumno</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/crearalumnos.css') }}"></head>
<body>
<div class="container">
    <h2>Crear Alumno</h2>
    <form method="POST" action="{{ route('alumnos.store') }}">
        @csrf
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" required>
        </div>
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" required>
        </div>
        <div class "form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
</html>