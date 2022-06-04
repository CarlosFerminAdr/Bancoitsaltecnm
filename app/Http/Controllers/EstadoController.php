<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatusOnRequest;
use App\Models\Estado;
use Illuminate\Http\Request;

/**
 * Class EstadoController
 * @package App\Http\Controllers
 */
class EstadoController extends Controller
{
    public function __construct(){
        $this->middleware('can:estados.index')->only('index');
        $this->middleware('can:estados.create')->only('create', 'store');
        $this->middleware('can:estados.edit')->only('edit', 'update');
        $this->middleware('can:estados.destroy')->only('destroy');
    }

    public function index()
    {
        $estados = Estado::paginate();
        return view('estado.index', compact('estados'))
            ->with('i', (request()->input('page', 1) - 1) * $estados->perPage());
    }

    public function create()
    {
        $estado = new Estado();
        return view('estado.create', compact('estado'));
    }

    public function store(StatusOnRequest $request)
    {
        $estado = Estado::create([
            'tipo_status' => strtoupper($request->tipo_status)
        ]);

        return redirect()->route('estados.index')
            ->with('mensaje','Estatus agregado corectamente!');
    }

    public function show($id)
    {
        $estado = Estado::find($id);

        return view('estado.show', compact('estado'));
    }

    public function edit($id)
    {
        $estado = Estado::find($id);

        return view('estado.edit', compact('estado'));
    }

    public function update(StatusOnRequest $request, Estado $estado)
    {
        $estado->update($request->all());

        return redirect()->route('estados.index')
            ->with('mensaje','Estatus actualizado corectamente!');
    }

    public function destroy($id)
    {
        $estado = Estado::find($id)->delete();

        return redirect()->route('estados.index')
            ->with('mensaje','Estatus eliminado corectamente!');
    }
}
