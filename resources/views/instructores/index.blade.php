<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>formulario Instructor </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/instructor/formularioinstructor.css') }}"></head>
<body>
    <div class="container">
 
        <h2>Listado de Instructores</h2>
        <a href="/menu"class="corner-button">Volver al Menú</a>

    
</div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Genero</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($instructores as $instructor)
                <tr>
                    <td>{{ $instructor->id }}</td>
                    <td>{{ $instructor->dni }}</td>
                    <td>{{ $instructor->nombres }}</td>
                    <td>{{ $instructor->apellidos }}</td>
                    <td>{{ $instructor->genero }}</td>
                    <td>{{ $instructor->edad }}</td>
                    <td>
                        <a href="{{ route('instructores.show', $instructor->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('instructores.edit', $instructor->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('instructores.destroy', $instructor->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('instructores.create') }}" class="btn btn-success">Agregar Instructor</a>
        
    </div>
</body>
</html>