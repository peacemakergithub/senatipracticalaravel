<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario alumnos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/formularioalumnos.css') }}">
</head>
<div class="container">
    <h2>Listado de Alumnos</h2>
    <a href="/menu"class="corner-button">Volver al Menú</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->dni }}</td>
                <td>{{ $alumno->nombres }}</td>
                <td>{{ $alumno->apellidos }}</td>
                <td>
                    <form action="{{ route('alumnos.show', $alumno->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">Ver</button>
                    </form>

                    <form action="{{ route('alumnos.edit', $alumno->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>

                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('alumnos.create') }}" class="btn btn-success">Agregar</a>
</div>
</html>