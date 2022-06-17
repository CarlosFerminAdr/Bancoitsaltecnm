<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Registro;
use Illuminate\Http\Request;
use PDF;

class RegistroAmecanicaController extends Controller
{
    public function index()
    {
        $registro = Registro::where(['carrera_id' => 3, 'status' => 1])->paginate();
        return view('registroMecanicaAuto/index',compact('registro'))
            ->with('i', (request()->input('page', 1) - 1) * $registro->perPage());
    }

    public function pdf()
    {
        $registro = Registro::where(['carrera_id' => 3, 'status' => 1])->paginate();
        view('registroMecanicaAuto.pdf' ,compact('registro'))->with('i', (request()->input('page', 1) - 1) * $registro->perPage());

        $pdf = PDF::loadView('registroMecanicaAuto.pdf',compact('registro'));
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

    public function destroy( Request $request, $id)
    {
        $status = '1';
        Registro::where('id', $id)->update([
            'status'=> $status
        ]);

        $alumno_id = $request->alumno_id;
        Alumno::where('id', $alumno_id)->update([
            'proyecto_id' => $request->proyecto_id
        ]);
        return redirect('registroMecanicaPro')->with('mensaje','Solicitud del Proyecto fue Autorizado!');
    }
}
