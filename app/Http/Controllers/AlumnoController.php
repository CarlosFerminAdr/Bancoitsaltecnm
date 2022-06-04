<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Carrera;
use App\Models\User;
use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;

class AlumnoController extends Controller
{
    public function __construct(){
        $this->middleware('can:alumnos.index')->only('index');
        $this->middleware('can:alumnos.create')->only('create', 'store');
        $this->middleware('can:alumnos.edit')->only('edit', 'update');
        $this->middleware('can:alumnos.destroy')->only('destroy');
    }

    public function index()
    {
        //$alumnos = Alumno::where('user_id', auth()->user()->id)->paginate();
        $alumnos = Alumno::paginate();
        return view('alumno/index',compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }

    public function create()
    {
        $carreras = Carrera::all();
        $users = User::where('tipo_user','Alumno')->orderby('name','asc')->get();
        return view('alumno.create',compact('carreras','users'));
    }

    public function store(AlumnoRequest $request)
    {
        $correo = 'L'.$request->ncontrol.'@salinacruz.tecnm.mx';
        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->ncontrol,
            'password' => bcrypt($request['nip']),
            'tipo_user' => 'Alumno',
            'status' => '1'
        ])->assignRole('Alumno');

        $alumno = Alumno::create([
            'apaterno' => strtoupper($request->apaterno),
            'amaterno' => strtoupper($request->amaterno),
            'nombre' => strtoupper($request->nombre),
            'ncontrol' => $request->ncontrol,
            'nip' => $request->nip,
            'correo' => $correo,
            'telefono' => $request->telefono,
            'carrera_id' => $request->carrera_id,
            'user_id' => $user->id
        ]);

        return redirect('alumnos')->with('mensaje','Alumno agregado corectamente!');
    }

    public function show(Alumno $alumno)
    {
        //
    }

    public function edit(Alumno $alumno)
    {
        $carreras = Carrera::all();
        $users = User::where('tipo_user','Alumno')->orderby('name','asc')->get();
        return view('alumno.edit',compact('alumno','carreras','users'));
    }

    public function update(AlumnoRequest $request, Alumno $alumno)
    {
        $correo = 'L'.$request->ncontrol.'@salinacruz.tecnm.mx';

        $alumno->user()->update([
            'email' => $request->ncontrol,
            'password' => bcrypt($request['nip'])
        ]);

        $alumno->apaterno = $request->apaterno;
        $alumno->amaterno = $request->amaterno;
        $alumno->nombre = $request->nombre;
        $alumno->ncontrol = $request->ncontrol;
        $alumno->nip = $request->nip;
        $alumno->correo = $correo;
        $alumno->telefono = $request->telefono;
        $alumno->carrera_id = $request->carrera_id;
        //$alumno->user_id = $request->user_id;
        $alumno->save();
        return redirect('alumnos')->with('mensaje','Alumno actualizado corectamente!');
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect('admin.alumnos')->with('mensaje','Alumno eliminado corectamente!');
    }

    public function alumno()
    {
        $alumnos = Alumno::paginate();
        return view('alumno/alumnoAll',compact('alumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
    }
}
