<?php

namespace App\Http\Controllers;

//use App\Models\Statu;
use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Proyectograma;
use App\Http\Requests\StoreProyectogramaRequest;
use App\Http\Requests\UpdateProyectogramaRequest;

class ProyectogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectogramas = Proyectograma::paginate(10);
        return view('proyectograma/index',compact('proyectogramas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$status = Statu::all();
        $estados = Estado::all();
        $empresas = Empresa::all();
        return view('proyectograma.create',compact('estados','empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProyectogramaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyectogramaRequest $request)
    {
        $proyectograma = new Proyectograma();
        $proyectograma->nombre = $request->nombre;
        $proyectograma->nalumnos = $request->nalumnos;
        $proyectograma->flimite = $request->flimite;
        $proyectograma->estado_id = $request->estado_id;
        $proyectograma->empresa_id = $request->empresa_id;
        $proyectograma->save();
        return redirect('proyectogramas')->with('mensaje','Registro agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyectograma  $proyectograma
     * @return \Illuminate\Http\Response
     */
    public function show(Proyectograma $proyectograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyectograma  $proyectograma
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyectograma $proyectograma)
    {
        //$status = Statu::all();
        $estados = Estado::all();
        $empresas = Empresa::all();
        return view('proyectograma.edit',compact('proyectograma','estados','empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProyectogramaRequest  $request
     * @param  \App\Models\Proyectograma  $proyectograma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProyectogramaRequest $request, Proyectograma $proyectograma)
    {
        $proyectograma->nombre = $request->nombre;
        $proyectograma->nalumnos = $request->nalumnos;
        $proyectograma->flimite = $request->flimite;
        $proyectograma->estado_id = $request->estado_id;
        $proyectograma->empresa_id = $request->empresa_id;
        $proyectograma->save();
        return redirect('proyectogramas')->with('mensaje','Registro actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyectograma  $proyectograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyectograma $proyectograma)
    {
        $proyectograma->delete();
        return redirect('proyectogramas')->with('mensaje','Registro eliminado corectamente!');
    }
}
