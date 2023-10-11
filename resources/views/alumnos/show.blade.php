<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        margin: 10px 0;
    }

    strong {
        font-weight: bold;
    }

    .btn {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 0;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
    }
</style>

<div class="container">
    <h2>Detalles de Alumno</h2>
    <p><strong>ID:</strong> {{ $alumno->id }}</p>
    <p><strong>DNI:</strong> {{ $alumno->dni }}</p>
    <p><strong>Nombres:</strong> {{ $alumno->nombres }}</p>
    <p><strong>Apellidos:</strong> {{ $alumno->apellidos }}</p>
    <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Volver</a>
</div>