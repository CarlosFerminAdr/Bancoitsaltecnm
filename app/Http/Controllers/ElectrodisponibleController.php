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

class ElectrodisponibleController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::where(['carrera_id' => 4, 'status' => 3])->paginate();
        return view('electronicaon/index',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function pdf()
    {
        $proyectos = Proyecto::where(['carrera_id' => 4, 'status' => 3])->paginate();
        view('electronicaon.pdf' ,compact('proyectos'))->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());

        $pdf = PDF::loadView('electronicaon.pdf',compact('proyectos'));
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

    public function edit(Proyecto $electronicaon)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('electronicaon.edit',compact('electronicaon', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProyectoRequest $request, Proyecto $electronicaon)
    {
        $electronicaon->update([
            'objetivo' => $request->objetivo,
            'problematica' => $request->problematica,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $electronicaon->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('electronicaon.edit');
        }

        return redirect('electronicaon')->with('mensaje','Proyecto Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
