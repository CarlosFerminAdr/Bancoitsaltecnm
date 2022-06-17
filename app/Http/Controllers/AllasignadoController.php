<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Programa;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateProgramaRequest;
use PDF;

class AllasignadoController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $programas = Programa::where('status', '2')->paginate();
        return view('asignadoPrograms/index',compact('programas', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
    }

    public function pdf()
    {
        $programas = Programa::where('status', '2')->paginate();
        view('asignadoPrograms.pdf' ,compact('programas'))->with('i', (request()->input('page', 1) - 1) * $programas->perPage());

        $pdf = PDF::loadView('asignadoPrograms.pdf',compact('programas'));
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

    public function edit(Programa $asignadoProgram)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('asignadoPrograms.edit',compact('asignadoProgram', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProgramaRequest $request, Programa $asignadoProgram)
    {
        $asignadoProgram->update([
            'actividades'=> $request->actividades,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $asignadoProgram->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('asignadoPrograms.edit');
        }

        return redirect('asignadoPrograms')->with('mensaje','Programa Autorizado Correctamente!');

    }

    public function destroy($id)
    {
        //
    }
}
