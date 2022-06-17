<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jdepto;
use Illuminate\Http\Request;
use App\Http\Requests\AdminjdeptoRequest;

class AdminJdeptoController extends Controller
{
    public function index()
    {
        $jdeptos = Jdepto::paginate();
        return view('admin.jdeptos.index',compact('jdeptos'))
            ->with('i', (request()->input('page', 1) - 1) * $jdeptos->perPage());
    }

    public function create()
    {
        $users = User::where('tipo_user','Jefe Depto')->orderby('name','asc')->get();
        return view('admin.jdepto.create',compact('users'));
    }

    public function store(AdminjdeptoRequest $request)
    {
        $jdepto = new Jdepto();
        $jdepto->apaterno = $request->apaterno;
        $jdepto->amaterno = $request->amaterno;
        $jdepto->nombre = $request->nombre;
        $jdepto->departamento = $request->departamento;
        $jdepto->user_id = $request->user_id;
        $jdepto->save();
        return redirect('admin.jdepto')->with('mensaje','Jefe de Departamento agregado corectamente!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
