<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroPelectronicaController extends Controller
{
    public function index()
    {
        $registro = Registro::where(['carrera_id' => 4, 'status' => 0])->paginate();
        return view('registroElectronicaPro/index',compact('registro'))
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
        $alumno_id = $request->alumno_id;
        Alumno::where('id', $alumno_id)->update([
            'proyecto_id' => null
        ]);

        $registro_id = $request->registro_id;
        Registro::where('id', $registro_id)->delete();
        return redirect('registroElectronicaPro')->with('mensaje','Solicitud del Proyecto fue Rechazado!');
    }
}
