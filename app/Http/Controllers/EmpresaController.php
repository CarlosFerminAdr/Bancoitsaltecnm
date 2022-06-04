<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\Domicilio;
use App\Models\User;
use App\Models\Empresa;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class EmpresaController extends Controller
{
    public function __construct(){
        $this->middleware('can:empresas.index')->only('index');
        $this->middleware('can:empresas.create')->only('create', 'store');
        $this->middleware('can:empresas.edit')->only('edit', 'update');
        $this->middleware('can:empresas.destroy')->only('destroy');
    }

    public function index()
    {
        $empresas = Empresa::where('user_id', auth()->user()->id)->paginate();
        return view('empresa/index',compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    public function create()
    {
        $domicilios = Domicilio::where('user_id', auth()->user()->id)->get();
        $users = User::where('tipo_user','Empresa')->orderby('name','asc')->get();
        return view('empresa.create',compact('domicilios','users'));
    }

    public function store(EmpresaRequest $request)
    {
        $empresa = Empresa::create([
            'nombre' => strtoupper($request->nombre),
            'giro' => strtoupper($request->giro),
            'rfc' => strtoupper($request->rfc),
            'correo' => strtoupper($request->correo),
            'telefono' => $request->telefono,
            'titular' => strtoupper($request->titular),
            'domicilio_id' => $request->domicilio_id,
            'user_id' => $request->user_id
        ]);

        return redirect('empresas')->with('mensaje','Empresa agregado corectamente!');
    }

    public function show(Empresa $empresa)
    {
        //
    }

    public function edit(Empresa $empresa)
    {
        $domicilios = Domicilio::all();
        $users = User::where('tipo_user','Empresa')->orderby('name','asc')->get();
        return view('empresa.edit',compact('empresa','domicilios','users'));
    }

    public function update(EmpresaRequest $request, Empresa $empresa)
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

    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect('empresas')->with('mensaje','Empresa eliminado corectamente!');
    }

    public function empresa()
    {
        $empresas = Empresa::paginate();
        return view('empresa/empresaAll',compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }
}
