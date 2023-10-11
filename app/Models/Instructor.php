<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $table = 'instructores'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombres', 'apellidos','dni','genero','edad'];
}


