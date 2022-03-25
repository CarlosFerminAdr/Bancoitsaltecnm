<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Http\Requests\StorePeriodoRequest;
use App\Http\Requests\UpdatePeriodoRequest;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::paginate(10);
        return view('periodo/index',compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('periodo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePeriodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePeriodoRequest $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:20'
        ]);

        $periodo = new Periodo();
        $periodo->nombre = $request->nombre;
        $periodo->save();
        return redirect('periodos')->with('mensaje','Periodo agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodo $periodo)
    {
        return view('periodo.edit',compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePeriodoRequest  $request
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePeriodoRequest $request, Periodo $periodo)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:20'
        ]);

        $periodo->nombre = $request->nombre;
        $periodo->save();
        return redirect('periodos')->with('mensaje','Periodo actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect('periodos')->with('mensaje','Periodo eliminado corectamente!');
    }
}
