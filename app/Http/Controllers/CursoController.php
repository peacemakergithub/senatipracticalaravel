<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Database\QueryException;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.show', compact('curso'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'duracion_horas' => 'required',
            'fecha_inicio' => 'required',
            'nivel' => 'required',
            'precio' => 'required',
            'idioma' => 'required',
        ]);

        try {
            Curso::create($request->all());

            return redirect()->route('cursos.index');
        } catch (QueryException $e) {
            $errorCode = $e->getCode();

            if ($errorCode === '23000') {
                return "El registro tiene un campo duplicado";
            } else if ($errorCode === '22001') {
                return "El registro tiene un campo más grande de lo esperado";
            } else {
                throw $e;
            }
        }
    }

    public function edit($id)
    {
        $curso = Curso::findOrFail($id);
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'duracion_horas' => 'required',
            'fecha_inicio' => 'required',
            'nivel' => 'required',
            'precio' => 'required',
            'idioma' => 'required',
        ]);

        $curso = Curso::findOrFail($id);

        try {
            $curso->update($request->all());
        } catch (QueryException $e) {
            $errorCode = $e->getCode();

            if ($errorCode === '23000') {
                return "El registro tiene un campo duplicado";
            } else if ($errorCode === '22001') {
                return "El registro tiene un campo más grande de lo esperado";
            } else {
                throw $e;
            }
        }

        return redirect()->route('cursos.index');
    }

    public function destroy($id)
{
    try {
        $curso = Curso::findOrFail($id);
        $curso->delete();
    } catch (QueryException $e) {
        $errorCode = $e->errorInfo[1];

        if ($errorCode === 1451) {
            return "No se puede eliminar este curso debido a restricciones de clave foránea.";
        } else {
            throw $e;
        }
    }

    return redirect()->route('cursos.index');
}

}
