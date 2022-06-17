<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Solicita;
use Illuminate\Http\Request;
use PDF;

class SolicitudCautorizadoController extends Controller
{
    public function index()
    {
        $solicitid = Solicita::where(['carrera_id' => 4, 'status' => 1])->paginate();
        return view('solicitudElectronicaAuto/index',compact('solicitid'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitid->perPage());
    }

    public function pdf()
    {
        $solicitid = Solicita::where(['carrera_id' => 4, 'status' => 1])->paginate();
        view('solicitudElectronicaAuto.pdf' ,compact('solicitid'))->with('i', (request()->input('page', 1) - 1) * $solicitid->perPage());

        $pdf = PDF::loadView('solicitudElectronicaAuto.pdf',compact('solicitid'));
        return $pdf->setPaper('a4','landscape')->stream();
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
        $status = '1';
        Solicita::where('id', $id)->update([
            'status'=> $status
        ]);

        $alumno_id = $request->alumno_id;
        Alumno::where('id', $alumno_id)->update([
            'programa_id' => $request->programa_id
        ]);
        return redirect('solicitudElectronicaPro')->with('mensaje','Solicitud del Programa fue Autorizado!');
    }
}
