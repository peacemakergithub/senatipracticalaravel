<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #ffe4b5; /* Fondo azul */
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #2980b9; /* Encabezado con color azul más oscuro */
            text-align: center;
            padding: 20px 0;
        }

        .nav-links {
            list-style: none;
            padding: 10px;
        }

        .nav-links li {
            display: inline;
            margin-right: 80px;
        }

        .nav-links li a {
            text-decoration: none;
            color: mistyrose;
        }

        .nav-links li a:hover {
            color: #ecf0f1; /* Cambia el color al pasar el mouse */
        }

        .content {
            text-align: center;
            color: sienna;
            padding: 150px 0;
        }

        h1 {
            font-size: 36px;
            margin: 10px 0;
        }

        h2 {
            font-size: 24px;
            margin: 10px 0;
        }

        .image-container {
            text-align: center;
        }

        .image {
            max-width: 100%;
        }
        .imagen-de-fondo {
           width: 300px; /* Define el ancho que desees */
           height: 200px; /* Define la altura que desees */
           background-image: url('IMAGEN.png');
            /* Ajusta la imagen para que cubra todo el div */
}
    </style>
</head>
<body>
    <header>
        <ul class="nav-links">
            <li><a href="{{ route('alumnos.index') }}">Alumnos</a></li>
            <li><a href="{{ route('instructores.index') }}">Instructores</a></li>
            <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
            <li><a href="{{ route('inicio') }}">Salir</a></li>
        </ul>
    </header>
    <div class="content">
        <h1>Bienvenido al Sistema de Control</h1>
        <h2>Senati</h2>
        <div class="imagen-de-fondo"></div>
    </div>
</body>
</html>