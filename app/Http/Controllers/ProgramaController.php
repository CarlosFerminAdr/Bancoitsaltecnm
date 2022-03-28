<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Models\Programa;
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
        $programas = Programa::paginate(5);
        return view('programa/index',compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        return view('programa.create',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProgramaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramaRequest $request)
    {
        $programa = new Programa();
        $programa->actividades = $request->actividades;
        $programa->tipo_id = $request->tipo_id;
        $programa->save();
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
        $tipos = Tipo::all();
        return view('programa.edit',compact('programa','tipos'));
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
        $programa->actividades = $request->actividades;
        $programa->tipo_id = $request->tipo_id;
        $programa->save();
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
