<?php

namespace App\Http\Controllers;

use App\Http\Requests\DomicilioRequest;
use App\Models\Domicilio;

class DomicilioController extends Controller
{
    public function __construct(){
        $this->middleware('can:domicilios.index')->only('index');
        $this->middleware('can:domicilios.create')->only('create', 'store');
        $this->middleware('can:domicilios.edit')->only('edit', 'update');
        $this->middleware('can:domicilios.destroy')->only('destroy');
    }

    public function index()
    {
        $domicilios = Domicilio::where('user_id', auth()->user()->id)->paginate();
        return view('domicilio/index',compact('domicilios'))
            ->with('i', (request()->input('page', 1) - 1) * $domicilios->perPage());
    }

    public function create()
    {
        return view('domicilio.create');
    }

    public function store(DomicilioRequest $request)
    {
        $domicilio = Domicilio::create([
            'calle' => strtoupper($request->calle),
            'numero' => $request->numero,
            'colonia' => strtoupper($request->colonia),
            'cp' => $request->cp,
            'municipio' => strtoupper($request->municipio),
            'estado' => strtoupper($request->estado),
            'user_id' => $request->user_id
        ]);

        return redirect('empresas/create')->with('mensaje','Domicilio agregado corectamente!');
    }

    public function show(Domicilio $domicilio)
    {
        //
    }

    public function edit(Domicilio $domicilio)
    {
        return view('domicilio.edit',compact('domicilio'));
    }

    public function update(DomicilioRequest $request, Domicilio $domicilio)
    {
        $domicilio->calle = $request->calle;
        $domicilio->numero = $request->numero;
        $domicilio->colonia = $request->colonia;
        $domicilio->cp = $request->cp;
        $domicilio->municipio = $request->municipio;
        $domicilio->estado = $request->estado;
        $domicilio->user_id = $request->user_id;
        $domicilio->save();
        return redirect('domicilios')->with('mensaje','Domicilio actualizado corectamente!');
    }

    public function destroy(Domicilio $domicilio)
    {
        $domicilio->delete();
        return redirect('domicilios')->with('mensaje','Domicilio eliminado corectamente!');
    }
}
