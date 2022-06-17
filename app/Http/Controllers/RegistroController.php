<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Models\Solicita;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        $registros = Registro::where(['carrera_id' => 5])->paginate();
        return view('registroTics/index',compact('registros'))
            ->with('i', (request()->input('page', 1) - 1) * $registros->perPage());
    }

    public function create()
    {
        //
    }

    public function store(StoreRegistroRequest $request)
    {
        //
    }

    public function show(Registro $registro)
    {
        //
    }

    public function edit(Registro $registro)
    {
        //
    }

    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->update([
            'status'=> $request->status
        ]);
    }

    public function destroy(Registro $registro)
    {
        //
    }

    public function autoriza(Registro $registro)
    {
        $status = '1';
        $registro->update([
            'status'=> $status
        ]);
        return redirect('registroSolicitud')->with('mensaje','Proyecto eliminado corectamente!');
    }

    public function changeStatus(Request $request){
        Registro::findOrFail($request->id)->update([
            'status'=> $request->status
        ]);
        return response()->json(['success'=> 'Cambio exitoso']);

    }

}
