<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}"></head>
    <title>Inicio</title>  
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
    </div>
    <div class="image-container">
    <img src="/imagenes/senati.png" alt="Descripción de la imagen" class="image">
</div>
</body>
</html>