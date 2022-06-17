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

class GestionasignadoController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::where(['carrera_id' => 6, 'status' => 2])->paginate();
        return view('gestionoff/index',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function pdf()
    {
        $proyectos = Proyecto::where(['carrera_id' => 6, 'status' => 2])->paginate();
        view('gestionoff.pdf' ,compact('proyectos'))->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());

        $pdf = PDF::loadView('gestionoff.pdf',compact('proyectos'));
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

    public function edit(Proyecto $gestionoff)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('gestionoff.edit',compact('gestionoff', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProyectoRequest $request, Proyecto $gestionoff)
    {
        $gestionoff->update([
            'objetivo' => $request->objetivo,
            'problematica' => $request->problematica,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $gestionoff->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('gestionoff.edit');
        }

        return redirect('gestionoff')->with('mensaje','Proyecto Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
