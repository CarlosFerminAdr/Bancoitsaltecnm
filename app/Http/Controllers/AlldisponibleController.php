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

class AlldisponibleController extends Controller
{
    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $programas = Programa::where('status', '3')->paginate();
        return view('disponiblePrograms/index',compact('programas', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
    }

    public function pdf()
    {
        $programas = Programa::where('status', '3')->paginate();
        view('disponiblePrograms.pdf' ,compact('programas'))->with('i', (request()->input('page', 1) - 1) * $programas->perPage());

        $pdf = PDF::loadView('disponiblePrograms.pdf',compact('programas'));
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

    public function edit(Programa $disponibleProgram)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('disponiblePrograms.edit',compact('disponibleProgram', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(UpdateProgramaRequest $request, Programa $disponibleProgram)
    {
        $disponibleProgram->update([
            'actividades'=> $request->actividades,
            'status' => $request->status,
            'periodo_id' => $request->periodo_id
        ]);

        if($request->nombre){
            $disponibleProgram->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite
            ]);
        }else{
            return redirect('disponiblePrograms.edit');
        }

        return redirect('disponiblePrograms')->with('mensaje','Programa Autorizado Correctamente!');
    }

    public function destroy($id)
    {
        //
    }
}
