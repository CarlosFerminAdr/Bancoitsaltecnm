<?php

namespace App\Http\Controllers;

use App\Models\Jdepto;
use App\Models\Carrera;
use App\Http\Requests\StoreCarreraRequest;
use App\Http\Requests\UpdateCarreraRequest;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::paginate(10);
        return view('carrera/index',compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jdeptos = Jdepto::all();
        return view('carrera.create',compact('jdeptos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarreraRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarreraRequest $request)
    {
        $carrera = new Carrera();
        $carrera->nombre = $request->nombre;
        $carrera->jdepto_id = $request->jdepto_id;
        $carrera->save();
        return redirect('carreras')->with('mensaje','Carrera agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrera $carrera)
    {
        $jdeptos = Jdepto::all();
        return view('carrera.edit',compact('carrera','jdeptos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarreraRequest  $request
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarreraRequest $request, Carrera $carrera)
    {
        $carrera->nombre = $request->nombre;
        $carrera->jdepto_id = $request->jdepto_id;
        $carrera->save();
        return redirect('carreras')->with('mensaje','Carrera actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect('carreras')->with('mensaje','Carrera eliminado corectamente!');
    }
}
