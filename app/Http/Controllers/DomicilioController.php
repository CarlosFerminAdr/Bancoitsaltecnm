<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Http\Requests\StoreDomicilioRequest;
use App\Http\Requests\UpdateDomicilioRequest;

class DomicilioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domicilios = Domicilio::paginate();
        return view('domicilio/index',compact('domicilios'))
            ->with('i', (request()->input('page', 1) - 1) * $domicilios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('domicilio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDomicilioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDomicilioRequest $request)
    {
        $request->validate([
            'calle' => 'required|min:3|max:30',
            'numero' => 'required|min:1|max:5',
            'colonia' => 'required|min:3|max:30',
            'cp' => 'required|min:5|max:6',
            'municipio' => 'required|min:3|max:50',
            'estado' => 'required|min:3|max:50'
        ]);

        $domicilio = new Domicilio();
        $domicilio->calle = $request->calle;
        $domicilio->numero = $request->numero;
        $domicilio->colonia = $request->colonia;
        $domicilio->cp = $request->cp;
        $domicilio->municipio = $request->municipio;
        $domicilio->estado = $request->estado;
        $domicilio->save();
        return redirect('empresas/create')->with('mensaje','Domicilio agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilio $domicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit(Domicilio $domicilio)
    {
        return view('domicilio.edit',compact('domicilio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDomicilioRequest  $request
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDomicilioRequest $request, Domicilio $domicilio)
    {
        $request->validate([
            'calle' => 'required|min:3|max:30',
            'numero' => 'required|min:1|max:5',
            'colonia' => 'required|min:3|max:30',
            'cp' => 'required|min:5|max:6',
            'municipio' => 'required|min:3|max:50',
            'estado' => 'required|min:3|max:50'
        ]);

        $domicilio->calle = $request->calle;
        $domicilio->numero = $request->numero;
        $domicilio->colonia = $request->colonia;
        $domicilio->cp = $request->cp;
        $domicilio->municipio = $request->municipio;
        $domicilio->estado = $request->estado;
        $domicilio->save();
        return redirect('domicilios')->with('mensaje','Domicilio actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domicilio $domicilio)
    {
        $domicilio->delete();
        return redirect('domicilios')->with('mensaje','Domicilio eliminado corectamente!');
    }
}
