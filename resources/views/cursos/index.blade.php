<!DOCTYPE html>
<html>

<head>
    <style>
        /* Estilo de fondo para toda la página */
        body {
            background-color: #e0f2f1;
            /* Color azul claro */
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #e0f2f1;/* Fondo azul claro */
            border: 2px solid #3498db;/* Borde verde */
        }

        th,td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db; /* Fondo verde para encabezados */
            color: white; /* Texto blanco para encabezados */
        }

        /* Estilos para los botones */
        .btn {
            background-color: #3498db;
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
            background-color: #3498db;
        }
        .btn:hover {
        background-color: #45a049; /* Color de fondo más oscuro al pasar el mouse */
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Listado de Cursos</h2>
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