<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarreraRequest;
use App\Models\Jdepto;
use App\Models\Carrera;
use App\Http\Requests\StoreCarreraRequest;
use App\Http\Requests\UpdateCarreraRequest;

class CarreraController extends Controller
{
    public function __construct(){
        $this->middleware('can:carreras.index')->only('index');
        $this->middleware('can:carreras.create')->only('create', 'store');
        $this->middleware('can:carreras.edit')->only('edit', 'update');
        $this->middleware('can:carreras.destroy')->only('destroy');
    }

    public function index()
    {
        $carreras = Carrera::paginate();
        return view('carrera/index',compact('carreras'))
            ->with('i', (request()->input('page', 1) - 1) * $carreras->perPage());
    }

    public function create()
    {
        $jdeptos = Jdepto::all();
        return view('carrera.create',compact('jdeptos'));
    }

    public function store(CarreraRequest $request)
    {
        $carrera = Carrera::create([
            'nombre' => strtoupper($request->nombre),
            'jdepto_id' => $request->jdepto_id
        ]);
        return redirect('carreras')->with('mensaje','Carrera agregado corectamente!');
    }

    public function show(Carrera $carrera)
    {
        //
    }

    public function edit(Carrera $carrera)
    {
        $jdeptos = Jdepto::all();
        return view('carrera.edit',compact('carrera','jdeptos'));
    }

    public function update(CarreraRequest $request, Carrera $carrera)
    {
        $carrera->nombre = $request->nombre;
        $carrera->jdepto_id = $request->jdepto_id;
        $carrera->save();
        return redirect('carreras')->with('mensaje','Carrera actualizado corectamente!');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect('carreras')->with('mensaje','Carrera eliminado corectamente!');
    }
}
