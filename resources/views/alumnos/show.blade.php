<div class="container">
        <h2>Detalles de Alumno</h2>
        <p><strong>ID:</strong> {{ $alumno->id }}</p>
        <p><strong>Nombres:</strong> {{ $alumno->nombres }}</p>
        <p><strong>Apellidos:</strong> {{ $alumno->apellidos }}</p>
        <a href="{{ route('alumnos.index') }}" class="btn btn-primary">Volver</a>
</div>