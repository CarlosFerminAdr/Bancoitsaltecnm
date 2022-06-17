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

class AllprocesoController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $programas = Programa::where('status', '1')->paginate();
        return view('procesoPrograms/index',compact('programas', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
    }

    public function pdf()
    {
        $programas = Programa::where('status', '1')->paginate();
        view('procesoPrograms.pdf' ,compact('programas'))->with('i', (request()->input('page', 1) - 1) * $programas->perPage());

        $pdf = PDF::loadView('procesoPrograms.pdf',compact('programas'));
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

    public function edit(Programa $procesoProgram)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('procesoPrograms.edit',compact('procesoProgram', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProgramaRequest $request, Programa $procesoProgram)
    {
        $procesoProgram->update([
            'actividades'=> $request->actividades,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $procesoProgram->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('procesoPrograms.edit');
        }

        return redirect('procesoPrograms')->with('mensaje','Programa Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
