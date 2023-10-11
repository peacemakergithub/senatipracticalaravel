<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use Illuminate\Database\QueryException;

class InstructoresController extends Controller
{

    public function index()
    {
        $instructores = Instructor::all();
        return view('instructores.index', compact('instructores'));
    }

    public function show($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('instructores.show', compact('instructor'));
    }
    public function create()
    {
        return view('instructores.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required',
            'genero' => 'required',
            'edad' => 'required',

        ]);
        try {
            Instructor::create($request->all());

            return redirect()->route('instructores.index');

        } catch (QueryException $e) {
            $errorCode = $e->getCode();

            if ($errorCode === '23000') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo duplicado";
            } else if ($errorCode === '22001') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo mas grande de lo esperado";
            } else {
                throw $e;
            }
        }
    }
    public function edit($id)
    {
        $instructor = Instructor::findOrFail($id);
        return view('instructores.edit', compact('instructor'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required',
            'genero' => 'required',
            'edad' => 'required',
        ]);

        $instructor = Instructor::findOrFail($id);

        try {
            $instructor->update([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'dni' => $request->dni,
                'genero' => $request->genero,
                'edad' => $request->edad,
            ]);
        } catch (QueryException $e) {
            $errorCode = $e->getCode();

            if ($errorCode === '23000') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo duplicado";
            } else if ($errorCode === '22001') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo mas grande de lo esperado";
            } else {
                throw $e;
            }
        }

        return redirect()->route('instructores.index');
    }
    public function destroy($id)
    {
        try {
            $instructor = Instructor::findOrFail($id);
            $instructor->delete();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode === 1451) {
                return "No se puede eliminar este instructor debido a restricciones de clave foránea.";
            } else {
                throw $e;
            }
        }

        return redirect()->route('instructores.index');
    }

}
