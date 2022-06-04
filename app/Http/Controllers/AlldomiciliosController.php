<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Http\Requests\AllDomiciliosRequest;

class AlldomiciliosController extends Controller
{
    public function index()
    {
        $domicilios = Domicilio::paginate();
        return view('allDomicilios/index',compact('domicilios'))
            ->with('i', (request()->input('page', 1) - 1) * $domicilios->perPage());
    }

    public function create()
    {
        return view('allDomicilios.create');
    }

    public function store(AllDomiciliosRequest $request)
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

        return redirect('allDomicilios')->with('mensaje','Domicilio agregado corectamente!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Domicilio $allDomicilio)
    {
        return view('allDomicilios.edit',compact('allDomicilio'));
    }

    public function update(AllDomiciliosRequest $request, Domicilio $allDomicilio)
    {
        $allDomicilio->calle = $request->calle;
        $allDomicilio->numero = $request->numero;
        $allDomicilio->colonia = $request->colonia;
        $allDomicilio->cp = $request->cp;
        $allDomicilio->municipio = $request->municipio;
        $allDomicilio->estado = $request->estado;
        //$allDomicilio->user_id = $request->user_id;
        $allDomicilio->save();
        return redirect('allDomicilios')->with('mensaje','Domicilio actualizado corectamente!');
    }

    public function destroy(Domicilio $allDomicilio)
    {
        $allDomicilio->delete();
        return redirect('allDomicilios')->with('mensaje','Domicilio eliminado corectamente!');
    }
}
