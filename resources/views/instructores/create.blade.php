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

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    select.form-control {
        width: 100%;
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
<div class="container"> <h2>Crear Instructor</h2> <form method="POST" action="{{ route('instructores.store') }}">
    @csrf
    <div class="form-group">
    <label for="nombres">Dni</label>
    <input type="text" class="form-control" id="dni" name="dni" required>
    </div>
    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" id="nombres" name="nombres" required>
    </div>
    <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" required>
</div>

<div class="form-group">
    <label for="genero">Género</label>
    <select class="form-control" id="genero" name="genero" required>
        <option>Masculino</option>
        <option>Femenino</option>
        <option>Otro</option>
    </select>
</div>
<div class="form-group">
    <label for="Edad ">Edad</label>
    <input type="text" class="form-control" id="edad" name="edad" required>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
