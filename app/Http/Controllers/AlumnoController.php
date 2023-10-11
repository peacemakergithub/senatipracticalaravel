<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use Illuminate\Database\QueryException;

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
            'dni' => 'required',
        ]);
        try{
            Alumno::create($request->all());

            return redirect()->route('alumnos.index');

        }catch(QueryException $e){
            $errorCode = $e->getCode();
           
            if ($errorCode === '23000') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo duplicado";
            }
            else if ($errorCode === '22001') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo mas grande de lo esperado";
            }
            else{
                throw $e;
            }
        }
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
            'dni' => 'required',
        ]);
    
        $alumno = Alumno::findOrFail($id);
        
        try{
            $alumno->update([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'dni' => $request->dni,
            ]);
        }catch(QueryException $e){
        $errorCode = $e->getCode();
        
        if ($errorCode === '23000') {

            //return "El registro tiene un campo duplicado <br>".$e->getMessage();
            return "El registro tiene un campo duplicado";
        }
        else if ($errorCode === '22001') {

            //return "El registro tiene un campo duplicado <br>".$e->getMessage();
            return "El registro tiene un campo mas grande de lo esperado";
        }
        else{
            throw $e;
        }
    }

        return redirect()->route('alumnos.index');
    }
    public function destroy($id)
    {
        try {
            $alumno = Alumno::findOrFail($id);
            $alumno->delete();
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
    
            if ($errorCode === 1451) {
                return "No se puede eliminar este alumno debido a restricciones de clave foránea.";
            } else {
                throw $e;
            }
        }
    
        return redirect()->route('alumnos.index');
    }
    }
    