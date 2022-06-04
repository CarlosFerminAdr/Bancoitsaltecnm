<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitudProyectoRequest;
use App\Models\Proyecto;
use App\Models\Alumno;
use App\Models\Registro;
use Illuminate\Http\Request;

class SolicitudProyectoController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(SolicitudProyectoRequest $request)
    {
        $maxAlumnos = $request->nalumnos;
        $status = '0';

        $registro = new Registro();
        $registro->alumno_id = $request->alumno_id;
        $registro->proyecto_id = $request->proyecto_id;
        $registro->carrera_id = $request->carrera_id;
        $registro->vacante = $maxAlumnos;
        $registro->disponible = $maxAlumnos;
        $registro->status = $status;
        $registro->save();
        return redirect('home')->with('mensaje','Solicitud realizada corectamente!');
    }

    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        $alumnos = Alumno::where('user_id', auth()->user()->id)->first();
        return view('banco.solicitudProyecto', compact('proyecto', 'alumnos'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
