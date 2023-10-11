<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); // Columna de ID autoincremental, común para la mayoría de las tablas.
            $table->string('nombre',50)->unique(); // Nombre del curso, columna de tipo string.
            $table->text('descripcion'); // Descripción del curso, columna de tipo texto.
            $table->integer('duracion_horas'); // Duración del curso en horas, columna de tipo entero.
            $table->date('fecha_inicio'); // Fecha de inicio del curso, columna de tipo fecha.
            $table->enum('nivel', ['principiante', 'intermedio', 'avanzado']); // Nivel del curso, columna de tipo enumeración.
            $table->decimal('precio', 10, 2); // Precio del curso, columna de tipo decimal con 10 dígitos en total y 2 decimales.
            // Agrega otras columnas según tus necesidades.
            $table->enum('idioma', ['español', 'español e inglés', 'inglés','otros']); // Agregamos la columna "idioma".
            $table->timestamps(); // Columnas de fecha de creación y actualización automática.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
