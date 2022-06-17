<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoProgramaRequest;
use App\Models\Tipo;

/**
 * Class TipoController
 * @package App\Http\Controllers
 */
class TipoController extends Controller
{
    public function __construct(){
        $this->middleware('can:tipos.index')->only('index');
        $this->middleware('can:tipos.create')->only('create', 'store');
        $this->middleware('can:tipos.edit')->only('edit', 'update');
        $this->middleware('can:tipos.destroy')->only('destroy');
    }

    public function index()
    {
        $tipos = Tipo::paginate();

        return view('tipo.index', compact('tipos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipos->perPage());
    }

    public function create()
    {
        $tipo = new Tipo();
        return view('tipo.create', compact('tipo'));
    }

    public function store(TipoProgramaRequest $request)
    {
        $tipo = Tipo::create([
            'tipo_programa' => strtoupper($request->tipo_programa)
        ]);

        return redirect()->route('tipos.index')
            ->with('mensaje','Tipo de programa agregado corectamente!');
    }

    public function show($id)
    {
        $tipo = Tipo::find($id);

        return view('tipo.show', compact('tipo'));
    }

    public function edit($id)
    {
        $tipo = Tipo::find($id);

        return view('tipo.edit', compact('tipo'));
    }

    public function update(TipoProgramaRequest $request, Tipo $tipo)
    {
        request()->validate(Tipo::$rules);

        $tipo->update($request->all());

        return redirect()->route('tipos.index')
            ->with('mensaje','Tipo de programa actualizado corectamente!');
    }

    public function destroy($id)
    {
        $tipo = Tipo::find($id)->delete();

        return redirect()->route('tipos.index')
            ->with('mensaje','Tipo de programa eliminado corectamente!');
    }
}
