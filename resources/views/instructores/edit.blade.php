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
<div class="container"> <h2>Editar instructor</h2> <form method="POST"
    action="{{ route('instructores.update', $instructor->id) }}">
    @csrf
    @method('PUT') <!-- Utiliza PUT para la actualización -->
    <div class="form-group">
        <label for="nombres">Dni</label>
        <input type="text" class="form-control" id="dni" name="dni" value="{{ $instructor->dni }}" required>
    </div>
    <div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $instructor->nombres }}" required>
    </div>
    <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $instructor->apellidos }}"
    required>
    </div>
    <div class="form-group">
        <label for="genero">Género</label> <select class="form-control" id="genero" name="genero" required> <option
            value="masculino" {{ $instructor->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="femenino" {{ $instructor->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="otro" {{ $instructor->genero == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
            </div< ?div class="form-group"> <label for="Edad ">Edad</label>
        <input type="text" class="form-control" id="edad" name="edad" value="{{ $instructor->edad }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
