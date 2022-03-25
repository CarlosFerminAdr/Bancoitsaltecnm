<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jdepto;
use App\Http\Requests\StoreJdeptoRequest;
use App\Http\Requests\UpdateJdeptoRequest;

class JdeptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jdeptos = Jdepto::paginate(5);
        return view('jdepto/index',compact('jdeptos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('tipo_user','Jefe Depto')->orderby('name','asc')->get();
        return view('jdepto.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJdeptoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJdeptoRequest $request)
    {
        $jdepto = new Jdepto();
        $jdepto->apaterno = $request->apaterno;
        $jdepto->amaterno = $request->amaterno;
        $jdepto->nombre = $request->nombre;
        $jdepto->departamento = $request->departamento;
        $jdepto->user_id = $request->user_id;
        $jdepto->save();
        return redirect('jdeptos')->with('mensaje','Jefe de Departamento agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jdepto  $jdepto
     * @return \Illuminate\Http\Response
     */
    public function show(Jdepto $jdepto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jdepto  $jdepto
     * @return \Illuminate\Http\Response
     */
    public function edit(Jdepto $jdepto)
    {
        $users = User::where('tipo_user','Jefe Depto')->orderby('name','asc')->get();
        return view('jdepto.edit',compact('jdepto','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJdeptoRequest  $request
     * @param  \App\Models\Jdepto  $jdepto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJdeptoRequest $request, Jdepto $jdepto)
    {
        $jdepto->apaterno = $request->apaterno;
        $jdepto->amaterno = $request->amaterno;
        $jdepto->nombre = $request->nombre;
        $jdepto->departamento = $request->departamento;
        $jdepto->user_id = $request->user_id;
        $jdepto->save();
        return redirect('jdeptos')->with('mensaje','Jefe de Departamento actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jdepto  $jdepto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jdepto $jdepto)
    {
        $jdepto->delete();
        return redirect('jdeptos')->with('mensaje','Jdepto eliminado corectamente!');
    }
}
