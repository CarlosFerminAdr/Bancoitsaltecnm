<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProyectoRequest;
use PDF;

class TicsprocesoController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::where(['carrera_id' => 5, 'status' => 1])->paginate();
        return view('tics/index',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function pdf()
    {
        $proyectos = Proyecto::where(['carrera_id' => 5, 'status' => 1])->paginate();
        view('tics.pdf' ,compact('proyectos'))->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());

        $pdf = PDF::loadView('tics.pdf',compact('proyectos'));
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

    public function edit(Proyecto $tic)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('tics.edit',compact('tic', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProyectoRequest $request, Proyecto $tic)
    {
        $tic->update([
            'objetivo' => $request->objetivo,
            'problematica' => $request->problematica,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $tic->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('tics.edit');
        }

        return redirect('tics')->with('mensaje','Proyecto Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
