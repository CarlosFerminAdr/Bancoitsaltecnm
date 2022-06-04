<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroAelectronicaController extends Controller
{
    public function index()
    {
        $registro = Registro::where(['carrera_id' => 4, 'status' => 1])->paginate();
        return view('registroElectronicaAuto/index',compact('registro'))
            ->with('i', (request()->input('page', 1) - 1) * $registro->perPage());
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
        Registro::where('id', $id)->update([
            'status'=> $status
        ]);

        $alumno_id = $request->alumno_id;
        Alumno::where('id', $alumno_id)->update([
            'proyecto_id' => $request->proyecto_id
        ]);
        return redirect('registroElectronicaPro')->with('mensaje','Solicitud del Proyecto fue Autorizado!');
    }
}
