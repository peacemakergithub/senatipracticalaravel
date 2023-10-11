<style>
     body {
            background-color: #e0f2f1; /* Color azul claro */
        }
    /* Estilos para la tabla */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #e0f2f1; /* Fondo azul claro */
        border: 2px solid #4CAF50; /* Borde verde */
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50; /* Fondo verde para encabezados */
        color: white; /* Texto blanco para encabezados */
    }

    tr:nth-child(even) {
        background-color: #f2f2f2; /* Fondo gris claro para filas pares */
    }

    /* Estilos para los botones */
    .btn {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        cursor: pointer;
        transition: background-color 0.3s; /* Transición al pasar el mouse */
    }

    .btn-danger {
        background-color: #f44336;
    }

    .btn-success {
        background-color: #4CAF50;
    }

    .btn:hover {
        background-color: #45a049; /* Color de fondo más oscuro al pasar el mouse */
    }
</style>

<div class="container">
    <h2>Listado de Alumnos</h2>
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