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
            $table->id(); 
            $table->string('nombre',50)->unique(); 
            $table->text('descripcion'); 
            $table->integer('duracion_horas'); 
            $table->date('fecha_inicio'); 
            $table->enum('nivel', ['principiante', 'intermedio', 'avanzado']); 
            $table->decimal('precio', 10, 2); 
            $table->enum('idioma', ['español', 'español e inglés', 'inglés','otros']); 
            $table->timestamps(); 
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
