<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Solicita;
use Illuminate\Http\Request;

class SolicitudEprocesoController extends Controller
{
    public function index()
    {
        $solicitid = Solicita::where(['carrera_id' => 5, 'status' => 0])->paginate();
        return view('solicitudTicsPro/index',compact('solicitid'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitid->perPage());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request, $id)
    {
        $alumno_id = $request->alumno_id;
        Alumno::where('id', $alumno_id)->update([
            'programa_id' => null
        ]);

        $solicitud_id = $request->solicitud_id;
        Solicita::where('id', $solicitud_id)->delete();
        return redirect('solicitudTicsPro')->with('mensaje','Solicitud del Programa fue Rechazado!');
    }
}
