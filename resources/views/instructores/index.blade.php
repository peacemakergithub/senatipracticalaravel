<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIr6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    
    <style>
        /* Estilo de fondo para toda la página */
        body {
            background-color: #e0f2f1; /* Color azul claro */
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #e0f2f1; /* Fondo azul claro */
            border: 2px solid #8e44ad; /* Borde verde */
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #8e44ad; /* Fondo verde para encabezados */
            color: white; /* Texto blanco para encabezados */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Fondo gris claro para filas pares */
        }

        /* Estilos para los botones */
        .btn {
            background-color: #8e44ad;
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
            background-color:#8e44ad;
        }

        .btn:hover {
            background-color: #45a049; /* Color de fondo más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <div class="container">
 
        <h2>Listado de Instructores</h2>
        
    
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