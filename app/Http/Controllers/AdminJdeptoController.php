<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jdepto;
use Illuminate\Http\Request;
use App\Http\Requests\AdminjdeptoRequest;

class AdminJdeptoController extends Controller
{
    /*
    public function __construct(){
        $this->middleware('can:admin.jdeptos.index')->only('index');
        $this->middleware('can:admin.jdeptos.create')->only('create', 'store');
        $this->middleware('can:admin.jdeptos.edit')->only('edit', 'update');
        $this->middleware('can:admin.jdeptos.destroy')->only('destroy');
    }
    */
    public function index()
    {
        $jdeptos = Jdepto::paginate();
        return view('admin.jdeptos.index',compact('jdeptos'))
            ->with('i', (request()->input('page', 1) - 1) * $jdeptos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('tipo_user','Jefe Depto')->orderby('name','asc')->get();
        return view('admin.jdepto.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
