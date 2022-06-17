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

class MecaniprocesoController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::where(['carrera_id' => 3, 'status' => 1])->paginate();
        return view('mecanica/index',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function pdf()
    {
        $proyectos = Proyecto::where(['carrera_id' => 3, 'status' => 1])->paginate();
        view('mecanica.pdf' ,compact('proyectos'))->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());

        $pdf = PDF::loadView('mecanica.pdf',compact('proyectos'));
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

    public function edit(Proyecto $mecanica)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('mecanica.edit',compact('mecanica', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProyectoRequest $request, Proyecto $mecanica)
    {
        $mecanica->update([
            'objetivo' => $request->objetivo,
            'problematica' => $request->problematica,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $mecanica->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('mecanica.edit');
        }

        return redirect('mecanica')->with('mensaje','Proyecto Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
