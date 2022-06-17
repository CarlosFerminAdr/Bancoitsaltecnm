<?php

namespace App\Http\Controllers;

use App\Http\Requests\JefeDepartamentoRequest;
use App\Models\User;
use App\Models\Jdepto;
use App\Http\Requests\StoreJdeptoRequest;
use App\Http\Requests\UpdateJdeptoRequest;

class JdeptoController extends Controller
{
    public function __construct(){
        $this->middleware('can:jdeptos.index')->only('index');
        $this->middleware('can:jdeptos.create')->only('create', 'store');
        $this->middleware('can:jdeptos.edit')->only('edit', 'update');
        $this->middleware('can:jdeptos.destroy')->only('destroy');
    }

    public function index()
    {
        $jdeptos = Jdepto::paginate();
        return view('jdepto/index',compact('jdeptos'))
            ->with('i', (request()->input('page', 1) - 1) * $jdeptos->perPage());
    }

    public function create()
    {
        $users = User::where('tipo_user','Jefe Depto')->orderby('name','asc')->get();
        return view('jdepto.create',compact('users'));
    }

    public function store(JefeDepartamentoRequest $request)
    {
        $correo = $request->departamento.'@salinacruz.tecnm.mx';
        $user = User::create([
            'name' => $request->nombre,
            'email' => $correo,
            'password' => bcrypt('1234'),
            'tipo_user' => 'Jefe Depto',
            'status' => '0'
        ])->assignRole('Ninguno');

        $jdepto = Jdepto::create([
            'apaterno' => strtoupper($request->apaterno),
            'amaterno' => strtoupper($request->amaterno),
            'nombre' => strtoupper($request->nombre),
            'departamento' => strtoupper($request->departamento),
            'user_id' => $user->id
        ]);

        return redirect('jdeptos')->with('mensaje','Jefe de Departamento agregado corectamente!');
    }

    public function show(Jdepto $jdepto)
    {
        //
    }

    public function edit(Jdepto $jdepto)
    {
        $users = User::where('tipo_user','Jefe Depto')->orderby('name','asc')->get();
        return view('jdepto.edit',compact('jdepto','users'));
    }

    public function update(JefeDepartamentoRequest $request, Jdepto $jdepto)
    {
        $jdepto->apaterno = $request->apaterno;
        $jdepto->amaterno = $request->amaterno;
        $jdepto->nombre = $request->nombre;
        $jdepto->departamento = $request->departamento;
        $jdepto->save();
        return redirect('jdeptos')->with('mensaje','Jefe de Departamento actualizado corectamente!');
    }

    public function destroy(Jdepto $jdepto)
    {
        $jdepto->delete();
        return redirect('jdeptos')->with('mensaje','Jdepto eliminado corectamente!');
    }

    public function jdepto()
    {
        $jdeptos = Jdepto::paginate();
        return view('jdepto/jdeptoAll',compact('jdeptos'))
            ->with('i', (request()->input('page', 1) - 1) * $jdeptos->perPage());
    }
}
