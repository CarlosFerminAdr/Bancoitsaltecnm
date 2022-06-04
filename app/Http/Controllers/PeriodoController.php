<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Http\Requests\PeriodoRequest;

class PeriodoController extends Controller
{
    public function __construct(){
        $this->middleware('can:periodos.index')->only('index');
        $this->middleware('can:periodos.create')->only('create', 'store');
        $this->middleware('can:periodos.edit')->only('edit', 'update');
        $this->middleware('can:periodos.destroy')->only('destroy');
    }

    public function index()
    {
        $periodos = Periodo::paginate();
        return view('periodo/index',compact('periodos'))
            ->with('i', (request()->input('page', 1) - 1) * $periodos->perPage());
    }

    public function create()
    {
        return view('periodo.create');
    }

    public function store(PeriodoRequest $request)
    {
        Periodo::create([
            'nombre' => strtoupper($request->nombre)
        ]);
        return redirect('periodos')->with('mensaje','Periodo agregado corectamente!');
    }

    public function show(Periodo $periodo)
    {
        //
    }

    public function edit(Periodo $periodo)
    {
        return view('periodo.edit',compact('periodo'));
    }

    public function update(PeriodoRequest $request, Periodo $periodo)
    {
        $datos = request()->except(['_token','_method']);
        Periodo::find($periodo->id)->update($datos);
        return redirect('periodos')->with('mensaje','Periodo actualizado corectamente!');
    }

    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect('periodos')->with('mensaje','Periodo eliminado corectamente!');
    }
}
