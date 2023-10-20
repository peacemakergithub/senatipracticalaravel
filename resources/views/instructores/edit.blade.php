<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Instructor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/instructor/editarinstructor.css') }}"></head>
<div class="container"> <h2>Editar instructor</h2> <form method="POST"
    action="{{ route('instructores.update', $instructor->id) }}">
    @csrf
    @method('PUT') <!-- Utiliza PUT para la actualización -->
    <div class="form-group">
        <label for="nombres">Dni</label>
        <input type="text" class="form-control" id="dni" name="dni" value="{{ $instructor->dni }}" required>
    </div>
    <div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $instructor->nombres }}" required>
    </div>
    <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $instructor->apellidos }}"
    required>
    </div>
    <div class="form-group">
        <label for="genero">Género</label> <select class="form-control" id="genero" name="genero" required> <option
            value="masculino" {{ $instructor->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="femenino" {{ $instructor->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="otro" {{ $instructor->genero == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
            </div< ?div class="form-group"> <label for="Edad ">Edad</label>
        <input type="text" class="form-control" id="edad" name="edad" value="{{ $instructor->edad }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
</html>