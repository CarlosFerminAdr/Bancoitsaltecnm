<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Models\Empresa;
use App\Http\Requests\AllEmpresasRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class AllempresasController extends Controller
{
    public function index()
    {
        $empresas = Empresa::paginate();
        return view('allEmpresas/index',compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    public function create()
    {
        $domicilios = Domicilio::all();
        return view('allEmpresas.create',compact('domicilios'));
    }

    public function store(AllEmpresasRequest $request)
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

        return redirect('allEmpresas')->with('mensaje','Empresa agregado corectamente!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Empresa $allEmpresa)
    {
        $domicilios = Domicilio::all();
        return view('allEmpresas.edit',compact('allEmpresa','domicilios'));
    }

    public function update(AllEmpresasRequest $request, Empresa $allEmpresa)
    {
        $allEmpresa->nombre = $request->nombre;
        $allEmpresa->giro = $request->giro;
        $allEmpresa->rfc = $request->rfc;
        $allEmpresa->correo = $request->correo;
        $allEmpresa->telefono = $request->telefono;
        $allEmpresa->titular = $request->titular;
        //$allEmpresa->domicilio_id = $request->domicilio_id;
        //$allEmpresa->user_id = $request->user_id;
        $allEmpresa->save();
        return redirect('allEmpresas')->with('mensaje','Empresa actualizado corectamente!');
    }

    public function destroy(Empresa $allEmpresa)
    {
        $allEmpresa->delete();
        return redirect('allEmpresas')->with('mensaje','Empresa eliminado corectamente!');
    }
}
