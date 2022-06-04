<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitudProgramaRequest;
use App\Models\Alumno;
use App\Models\Programa;
use App\Models\Solicita;
use Illuminate\Http\Request;

class SolicitudProgramaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(SolicitudProgramaRequest $request)
    {
        $maxAlumnos = $request->nalumnos;
        $status = '0';

        $registro = new Solicita();
        $registro->alumno_id = $request->alumno_id;
        $registro->programa_id = $request->programa_id;
        $registro->carrera_id = $request->carrera_id;
        $registro->vacante = $maxAlumnos;
        $registro->disponible = $maxAlumnos;
        $registro->status = $status;
        $registro->save();
        return redirect('home2')->with('mensaje','Solicitud realizada corectamente!');
    }

    public function show($id)
    {
        $programa = Programa::find($id);
        $alumnos = Alumno::where('user_id', auth()->user()->id)->first();
        return view('banco.solicitudPrograma', compact('programa', 'alumnos'));
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
