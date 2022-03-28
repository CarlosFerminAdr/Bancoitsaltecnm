<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Models\User;
use App\Models\Empresa;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::paginate(5);
        return view('empresa/index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domicilios = Domicilio::all();
        $users = User::where('tipo_user','Empresa')->orderby('name','asc')->get();
        return view('empresa.create',compact('domicilios','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpresaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpresaRequest $request)
    {
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->giro = $request->giro;
        $empresa->rfc = $request->rfc;
        $empresa->correo = $request->correo;
        $empresa->telefono = $request->telefono;
        $empresa->titular = $request->titular;
        $empresa->domicilio_id = $request->domicilio_id;
        $empresa->user_id = $request->user_id;
        $empresa->save();
        return redirect('empresas')->with('mensaje','Empresa agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        $domicilios = Domicilio::all();
        $users = User::where('tipo_user','Empresa')->orderby('name','asc')->get();
        return view('empresa.edit',compact('empresa','domicilios','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpresaRequest  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpresaRequest $request, Empresa $empresa)
    {
        $empresa->nombre = $request->nombre;
        $empresa->giro = $request->giro;
        $empresa->rfc = $request->rfc;
        $empresa->correo = $request->correo;
        $empresa->telefono = $request->telefono;
        $empresa->titular = $request->titular;
        $empresa->domicilio_id = $request->domicilio_id;
        $empresa->user_id = $request->user_id;
        $empresa->save();
        return redirect('empresas')->with('mensaje','Empresa actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect('empresas')->with('mensaje','Empresa eliminado corectamente!');
    }
}
