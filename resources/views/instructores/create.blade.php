<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Instructor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/instructor/crearinstructor.css') }}"></head>
<div class="container"> <h2>Crear Instructor</h2> <form method="POST" action="{{ route('instructores.store') }}">
    @csrf
    <div class="form-group">
    <label for="nombres">Dni</label>
    <input type="text" class="form-control" id="dni" name="dni" required>
    </div>
    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" id="nombres" name="nombres" required>
    </div>
    <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
</div>

<div class="form-group">
    <label for="genero">Género</label>
    <select class="form-control" id="genero" name="genero" required>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
    </select>
</div>
<div class="form-group">
    <label for="Edad ">Edad</label>
    <input type="text" class="form-control" id="edad" name="edad" required>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</html>