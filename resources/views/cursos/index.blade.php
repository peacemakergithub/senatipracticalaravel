<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario Curso</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cursos/formulario.cursos.css') }}"></head>
<body>
    <div class="container">
        <h2>Listado de Cursos</h2>
        <a href="/menu"class="corner-button">Volver al Menú</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Duración (horas)</th>
                    <th>Fecha de Inicio</th>
                    <th>Nivel</th>
                    <th>Precio</th>
                    <th>Idioma</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->descripcion }}</td>
                    <td>{{ $curso->duracion_horas }}</td>
                    <td>{{ $curso->fecha_inicio }}</td>
                    <td>{{ $curso->nivel }}</td>
                    <td>{{ $curso->precio }}</td>
                    <td>{{ $curso->idioma }}</td>
                    <td>
                        <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('cursos.create') }}" class="btn btn-success">Agregar Curso</a>
    </div>
</body>
</html>
