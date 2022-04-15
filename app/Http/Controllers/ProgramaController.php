<?php

namespace App\Http\Controllers;

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = Empresa::all();
        $programas = Programa::where('user_id', auth()->user()->id)->paginate();
        return view('programa/index',compact('programas', 'empresa'))
            ->with('i', (request()->input('page', 1) - 1) * $programas->perPage());
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
        $tipos = Tipo::all();
        return view('programa.create',compact('tipos', 'estados', 'empresas', 'periodos', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramaRequest $request)
    {
        //return $request;
        $programa = Programa::create($request->all());

        if($request->nombre){
            $programa->proyectograma()->create([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'status'=> $request->status,
                'empresa_id'=> $request->empresa_id
            ]);
        }else{
            return redirect('programas.create');
        }

        if($request->periodos){
            $programa->periodos()->attach($request->periodos);
        }else{
            return redirect('programas.create');
        }

        if($request->carreras){
            $programa->carreras()->attach($request->carreras);
        }else{
            return redirect('programas.create');
        }

        return redirect('programas')->with('mensaje','Programa agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Programa $programa)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        $periodos = Periodo::all();
        $carreras = Carrera::all();
        $tipos = Tipo::all();
        return view('programa.edit',compact('programa', 'estados', 'empresas', 'periodos', 'carreras', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProgramaRequest  $request
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramaRequest $request, Programa $programa)
    {
        $programa->update($request->all());
        if($request->nombre){
            $programa->proyectograma()->update([
                'nombre'=> $request->nombre,
                'nalumnos'=> $request->nalumnos,
                'flimite'=> $request->flimite,
                'status'=> $request->status,
                'empresa_id'=> $request->empresa_id
            ]);
        }else{
            return redirect('programas.edit');
        }

        if($request->periodos){
            $programa->periodos()->sync($request->periodos);
        }else{
            return redirect('programas.edit');
        }

        if($request->carreras){
            $programa->carreras()->sync($request->carreras);
        }else{
            return redirect('programas.edit');
        }

        return redirect('programas')->with('mensaje','Programa actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programa $programa)
    {
        $programa->delete();
        return redirect('programas')->with('mensaje','Programa eliminado corectamente!');
    }
}
