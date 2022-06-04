<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramaRequest;
use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Tipo;
use App\Models\Programa;
use App\Models\Proyectograma;
use App\Http\Requests\StoreProgramaRequest;
use App\Http\Requests\UpdateProgramaRequest;

class ProgramaController extends Controller
{
    public function __construct(){
        $this->middleware('can:programas.index')->only('index');
        $this->middleware('can:programas.create')->only('create', 'store');
        $this->middleware('can:programas.edit')->only('edit', 'update');
        $this->middleware('can:programas.destroy')->only('destroy');
    }

    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $programas = Programa::where('user_id', auth()->user()->id)->paginate();
        return view('programa/index',compact('programas', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
    }

    public function create()
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        $tipos = Tipo::all();
        return view('programa.create',compact('tipos', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function store(ProgramaRequest $request)
    {
        $status = '1';
        $programa = Programa::create([
            'actividades'=> strtoupper($request->actividades),
            'tipo_id'=> $request->tipo_id,
            'status' => $status,
            'periodo_id' => $request->periodo_id,
            'carrera_id' => $request->carrera_id,
            'user_id' => $request->user_id
        ]);

        if($request->nombre){
            $programa->proyectograma()->create([
                'nombre'=> strtoupper($request->nombre),
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'empresa_id'=> $request->empresa_id
            ]);

            $programa->periodos()->attach($request->periodos);

            $programa->carreras()->attach($request->carreras);

            return redirect('programas')->with('mensaje','Programa agregado corectamente!');
        }else{
            return redirect('programas/create');
        }
    }

    public function show(Programa $programa)
    {
        //
    }

    public function edit(Programa $programa)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        $tipos = Tipo::all();
        return view('programa.edit',compact('programa', 'estados', 'empresas', 'periodos', 'carreras', 'tipos'));
    }

    public function update(ProgramaRequest $request, Programa $programa)
    {
        $programa->update([
            'actividades'=> $request->actividades,
            'tipo_id'=> $request->tipo_id,
            'periodo_id' => $request->periodo_id,
            'carrera_id' => $request->carrera_id
        ]);

        if($request->nombre){
            $programa->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'empresa_id'=> $request->empresa_id
            ]);

            $programa->periodos()->sync($request->periodos);

            $programa->carreras()->sync($request->carreras);

            return redirect('programas')->with('mensaje','Programa actualizado corectamente!');
        }else{
            return redirect('programas.edit');
        }
    }

    public function destroy(Programa $programa)
    {
        $programa->delete();
        return redirect('programas')->with('mensaje','Programa eliminado corectamente!');
    }

    public function programa()
    {
        $empresa = Empresa::all();
        $programas = Programa::paginate();
        return view('programa/programaAll',compact('programas', 'empresa'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
    }
}
