<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Curso</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cursos/editarcursos.css') }}"></head>
<div class="container">
    <h2>Editar Curso</h2>
    <form method="POST" action="{{ route('cursos.update', $curso->id) }}">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $curso->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="duracion_horas">Duración (horas)</label>
            <input type="text" class="form-control" id="duracion_horas" name="duracion_horas" value="{{ $curso->duracion_horas }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ $curso->fecha_inicio }}" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nivel</label>
            <select class="form-control" id="nivel" name="nivel" required>
                <option value="principiante" {{ $curso->nivel == 'principiante' ? 'selected' : '' }}>Principiante</option>
                <option value="intermedio" {{ $curso->nivel == 'intermedio' ? 'selected' : '' }}>Intermedio</option>
                <option value="avanzado" {{ $curso->nivel == 'avanzado' ? 'selected' : '' }}>Avanzado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="{{ $curso->precio }}" required>
        </div>
        <div class="form-group">
            <label for="idioma">Idioma</label>
            <select class="form-control" id="idioma" name="idioma" required>
                <option value="español" {{ $curso->idioma == 'español' ? 'selected' : '' }}>Español</option>
                <option value="español e inglés" {{ $curso->idioma == 'español e inglés' ? 'selected' : '' }}>Español e Inglés</option>
                <option value="inglés" {{ $curso->idioma == 'inglés' ? 'selected' : '' }}>Inglés</option>
                <option value="otros" {{ $curso->idioma == 'otros' ? 'selected' : '' }}>Otros</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
</html>