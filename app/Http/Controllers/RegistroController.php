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
        //$registros = Registro::where(['carrera_id' => 5, 'status' => 0])->paginate();
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
        return $request;
        /*if($request->proyecto_id){
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
        }elseif($request->programa_id){
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
        */
    }

    public function show(Registro $registro)
    {
        //
    }

    public function edit(Registro $registro)
    {
        /*$status = '1';
        $registro->update([
            'status'=> $status
        ]);
        return redirect('registroSolicitud')->with('mensaje','Proyecto eliminado corectamente!');*/
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
        //return $request;
        /*$registro = Registro::find($request->id);
        $registro->status = $request->status;
        $registro->save();
        return response()->json(['success'=> 'Cambio exitoso']);*/
        Registro::findOrFail($request->id)->update([
            'status'=> $request->status
        ]);
        return response()->json(['success'=> 'Cambio exitoso']);

    }

    /*public function UpdateStatusNoti(UpdateRegistroRequest $request){

        $NotiUpdate = Registro::findOrFail($request->id)->update(['status' => $request->status]);

        if($request->status == 0)  {
            $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">Inactiva</button>';
        }else{
            $newStatus ='<br> <button type="button" class="btn btn-sm btn-success">Activa</button>';
        }

        return response()->json(['var'=>''.$newStatus.'']);
    }*/
}
