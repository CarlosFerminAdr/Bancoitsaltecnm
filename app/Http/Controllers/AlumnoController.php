<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\User;
use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::where('user_id', auth()->user()->id)->paginate();
        return view('alumno/index',compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = Carrera::all();
        $users = User::where('tipo_user','Alumno')->orderby('name','asc')->get();
        return view('alumno.create',compact('carreras','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlumnoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlumnoRequest $request)
    {
        $alumno = new Alumno();
        $alumno->apaterno = $request->apaterno;
        $alumno->amaterno = $request->amaterno;
        $alumno->nombre = $request->nombre;
        $alumno->ncontrol = $request->ncontrol;
        $alumno->nip = $request->nip;
        $alumno->correo = $request->correo;
        $alumno->telefono = $request->telefono;
        $alumno->carrera_id = $request->carrera_id;
        $alumno->user_id = $request->user_id;
        $alumno->save();
        return redirect('alumnos')->with('mensaje','Alumno agregado corectamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $carreras = Carrera::all();
        $users = User::where('tipo_user','Alumno')->orderby('name','asc')->get();
        return view('alumno.edit',compact('alumno','carreras','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumnoRequest  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $alumno->apaterno = $request->apaterno;
        $alumno->amaterno = $request->amaterno;
        $alumno->nombre = $request->nombre;
        $alumno->ncontrol = $request->ncontrol;
        $alumno->nip = $request->nip;
        $alumno->correo = $request->correo;
        $alumno->telefono = $request->telefono;
        $alumno->carrera_id = $request->carrera_id;
        $alumno->user_id = $request->user_id;
        $alumno->save();
        return redirect('alumnos')->with('mensaje','Alumno actualizado corectamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect('alumnos')->with('mensaje','Alumno eliminado corectamente!');
    }
}
