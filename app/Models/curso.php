<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $table = 'cursos'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'descripcion', 'duracion_horas', 'fecha_inicio', 'nivel', 'precio', 'idioma'];
}
