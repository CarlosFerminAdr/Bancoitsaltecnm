<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Periodo;
use App\Models\Carrera;
use App\Models\Proyecto;
use App\Models\Proyectograma;
use App\Http\Requests\StoreProyectoRequest;
use App\Http\Requests\UpdateProyectoRequest;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::all();
        $proyectos = Proyecto::where('user_id', auth()->user()->id)->paginate();
        return view('proyecto/index',compact('proyectos', 'empresa'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        return view('proyecto.create',compact('estados', 'empresas', 'periodos', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProyectoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyectoRequest $request)
    {
        //return $request;
        $proyecto = Proyecto::create($request->all());

        if($request->nombre){
            $proyecto->proyectograma()->create([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'status'=> $request->status,
                'empresa_id'=> $request->empresa_id
            ]);
        }else{
            return redirect('proyectos.create');
        }

        if($request->periodos){
            $proyecto->periodos()->attach($request->periodos);
        }else{
            return redirect('proyectos.create');
        }

        if($request->carreras){
            $proyecto->carreras()->attach($request->carreras);
        }else{
            return redirect('proyectos.create');
        }

        return redirect('proyectos')->with('mensaje','Proyecto agregado corectamente!');

        /*
        $proyecto = new Proyecto();
        $proyecto->objetivo = $request->objetivo;
        $proyecto->problematica = $request->problematica;
        $proyecto->save();
        return redirect('proyectos')->with('mensaje','Proyecto agregado corectamente!');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        $arreglo = ['ing. acuicultura', 'ing, quimica'];
        //$arreglo = Carrera::where('id', $proyecto)->pluck('nombre')->toArray();

        return view('proyecto.edit',compact('proyecto', 'estados', 'empresas', 'periodos', 'carreras', 'arreglo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProyectoRequest  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProyectoRequest $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        if($request->nombre){
            $proyecto->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'status'=> $request->status,
                'empresa_id'=> $request->empresa_id
            ]);
        }else{
            return redirect('proyectos.edit');
        }

        if($request->periodos){
            $proyecto->periodos()->sync($request->periodos);
        }else{
            return redirect('proyectos.edit');
        }

        if($request->carreras){
            $proyecto->carreras()->sync($request->carreras);
        }else{
            return redirect('proyectos.edit');
        }

        return redirect('proyectos')->with('mensaje','Proyecto actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect('proyectos')->with('mensaje','Proyecto eliminado corectamente!');
    }
}
