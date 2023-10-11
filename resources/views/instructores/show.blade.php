<style>
    .container {
        max-width: 500px;
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
        margin: 10px 0;
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
<div class="container"> <h2>Detalles de instructor</h2>
    <p><strong>ID:</strong> {{ $instructor->id }}</p>
    <P><strong>Dni:</strong> {{ $instructor->dni }}</p>
    <p><strong>Nombres:</strong> {{ $instructor->nombres }}</p>
    <p><strong>Apellidos:</strong> {{ $instructor->apellidos }}</p>
    <p><strong>Genero:</strong> {{ $instructor->genero }}</p>
    <p><strong>Edad:</strong> {{ $instructor->edad }}</p>

    <a href="{{ route('instructores.index') }}" class="btn btn-primary">Volver</a>

</div>
