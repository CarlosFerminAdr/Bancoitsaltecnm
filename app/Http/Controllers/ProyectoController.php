<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;
use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Proyecto;

class ProyectoController extends Controller
{
    public function __construct(){
        $this->middleware('can:proyectos.index')->only('index');
        $this->middleware('can:proyectos.create')->only('create', 'store');
        $this->middleware('can:proyectos.edit')->only('edit', 'update');
        $this->middleware('can:proyectos.destroy')->only('destroy');
    }

    public function index()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::where('user_id', auth()->user()->id)->paginate();
        return view('proyecto/index',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    public function create()
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('proyecto.create',compact('estados', 'empresas', 'periodos', 'carreras'));
    }

    public function store(ProyectoRequest $request)
    {
        $status = '1';
        $proyecto = Proyecto::create([
            'objetivo'=> strtoupper($request->objetivo),
            'problematica'=> strtoupper($request->problematica),
            'status' => $status,
            'periodo_id' => $request->periodo_id,
            'carrera_id' => $request->carrera_id,
            'user_id'=> $request->user_id
        ]);

        if($request->nombre){
            $proyecto->proyectograma()->create([
                'nombre'=> strtoupper($request->nombre),
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'empresa_id'=> $request->empresa_id
            ]);

            $proyecto->periodos()->attach($request->periodos);

            $proyecto->carreras()->attach($request->carreras);

            return redirect('proyectos')->with('mensaje','Proyecto agregado corectamente!');
        }else{
            return redirect('proyectos/create');
        }
    }

    public function show(Proyecto $proyecto)
    {
        //
    }

    public function edit(Proyecto $proyecto)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('proyecto.edit',compact('proyecto', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    public function update(ProyectoRequest $request, Proyecto $proyecto)
    {
        $proyecto->update([
            'objetivo'=> $request->objetivo,
            'problematica'=> $request->problematica,
            'periodo_id' => $request->periodo_id,
            'carrera_id' => $request->carrera_id
        ]);

        if($request->nombre){
            $proyecto->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'empresa_id'=> $request->empresa_id
            ]);

            $proyecto->periodos()->sync($request->periodos);

            $proyecto->carreras()->sync($request->carreras);

            return redirect('proyectos')->with('mensaje','Proyecto actualizado corectamente!');
        }else{
            return redirect('proyectos.edit');
        }
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect('proyectos')->with('mensaje','Proyecto eliminado corectamente!');
    }

    public function proyecto()
    {
        $empresa = Empresa::all();
        $periodo = Periodo::all();
        $proyectos = Proyecto::paginate();
        return view('proyecto/proyectoAll',compact('proyectos', 'empresa', 'periodo'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }
}
