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

class MecanidisponibleController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::where(['carrera_id' => 3, 'status' => 3])->paginate();
        return view('mecanicaon/index',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function pdf()
    {
        $proyectos = Proyecto::where(['carrera_id' => 3, 'status' => 3])->paginate();
        view('mecanicaon.pdf' ,compact('proyectos'))->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());

        $pdf = PDF::loadView('mecanicaon.pdf',compact('proyectos'));
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

    public function edit(Proyecto $mecanicaon)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('mecanicaon.edit',compact('mecanicaon', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProyectoRequest $request, Proyecto $mecanicaon)
    {
        $mecanicaon->update([
            'objetivo' => $request->objetivo,
            'problematica' => $request->problematica,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $mecanicaon->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('mecanicaon.edit');
        }

        return redirect('mecanicaon')->with('mensaje','Proyecto Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
