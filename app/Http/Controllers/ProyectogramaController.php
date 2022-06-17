<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Empresa;
use App\Models\Proyectograma;
use App\Http\Requests\StoreProyectogramaRequest;
use App\Http\Requests\UpdateProyectogramaRequest;

class ProyectogramaController extends Controller
{
    public function index()
    {
        $proyectogramas = Proyectograma::paginate(10);
        return view('proyectograma/index',compact('proyectogramas'));
    }

    public function create()
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        return view('proyectograma.create',compact('estados','empresas'));
    }

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

    public function show(Proyectograma $proyectograma)
    {
        //
    }

    public function edit(Proyectograma $proyectograma)
    {
        $estados = Estado::all();
        $empresas = Empresa::all();
        return view('proyectograma.edit',compact('proyectograma','estados','empresas'));
    }

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

    public function destroy(Proyectograma $proyectograma)
    {
        $proyectograma->delete();
        return redirect('proyectogramas')->with('mensaje','Registro eliminado corectamente!');
    }
}
