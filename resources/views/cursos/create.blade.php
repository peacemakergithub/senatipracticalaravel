<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Alumno</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cursos/creacursos.css') }}"></head>
<body>
    <div class="container">
        <h2>Crear Curso</h2>
        <form method="POST" action="{{ route('cursos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label for="duracion_horas">Duración (horas)</label>
                <input type="text" class="form-control" id="duracion_horas" name="duracion_horas" required>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="form-group">
                <label for="nivel">Nivel</label>
                <select class="form-control" id="nivel" name="nivel" required>
                    <option value="principiante">Principiante</option>
                    <option value="intermedio">Intermedio</option>
                    <option value="avanzado">Avanzado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="idioma">Idioma</label>
                <select class="form-control" id="idioma" name="idioma" required>
                    <option value="español">Español</option>
                    <option value="español e inglés">Español e Inglés</option>
                    <option value="inglés">Inglés</option>
                    <option value="otros">Otros</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>