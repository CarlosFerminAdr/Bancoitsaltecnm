<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroAticsController extends Controller
{
    public function index()
    {
        $registro = Registro::where(['carrera_id' => 5, 'status' => 1])->paginate();
        return view('registroTicsAuto/index',compact('registro'))
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
        return redirect('registroTicsPro')->with('mensaje','Solicitud del Proyecto fue Autorizado!');
    }
}
