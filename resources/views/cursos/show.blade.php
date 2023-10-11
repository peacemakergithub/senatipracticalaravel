<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    p {
        margin: 5px 0;
    }

    strong {
        font-weight: bold;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: block;
        margin: 0 auto;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #45a049;
    }
</style>
<div class="container">
    <h2>Detalles del Curso</h2>
    <p><strong>ID:</strong> {{ $curso->id }}</p>
    <p><strong>Nombre:</strong> {{ $curso->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $curso->descripcion }}</p>
    <p><strong>Duración (horas):</strong> {{ $curso->duracion_horas }}</p>
    <p><strong>Fecha de Inicio:</strong> {{ $curso->fecha_inicio }}</p>
    <p><strong>Nivel:</strong> {{ $curso->nivel }}</p>
    <p><strong>Precio:</strong> {{ $curso->precio }}</p>
    <p><strong>Idioma:</strong> {{ $curso->idioma }}</p>

    <a href="{{ route('cursos.index') }}" class="btn btn-primary">Volver</a>
</div>
