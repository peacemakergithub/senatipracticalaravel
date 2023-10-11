<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
      /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('cursos')->insert([
            'nombre' => 'Curso de JavaScript',
            'descripcion' => 'Aprende a programar en JavaScript .',
            'duracion_horas' => 50,
            'fecha_inicio' => now(),
            'nivel' => 'intermedio',
            'precio' => 300.00,
            'idioma' => 'español',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('cursos')
            ->where('nombre', 'Curso de Programación en PHP')
            ->where('descripcion', 'Aprende a programar en PHP desde cero.')
            ->where('duracion_horas', 40)
            ->where('nivel', 'intermedio')
            ->where('precio', 199.99)
            ->where('idioma', 'español')
            ->delete();
    }
};
