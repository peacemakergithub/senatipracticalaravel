<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }
    public function show($id)
    {   
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show', compact('alumno'));
    }
    public function create()
    {
        return view('alumnos.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index');
    }
    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
        ]);
    
        $alumno = Alumno::findOrFail($id);
        $alumno->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
        ]);

        return redirect()->route('alumnos.index');
    }
    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->route('alumnos.index');
    }
}
