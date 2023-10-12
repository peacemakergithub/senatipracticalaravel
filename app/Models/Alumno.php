<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos'; // nombre de la tabla en la base de datos
    protected $fillable = ['nombres', 'apellidos','dni'];
}
