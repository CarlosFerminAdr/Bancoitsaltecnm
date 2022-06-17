<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Http\Requests\StatuRequest;

class StatuController extends Controller
{
    public function index()
    {
        $status = Statu::paginate(5);
        return view('statu/index',compact('status'));
    }

    public function create()
    {
        return view('statu.create');
    }

    public function store(StatuRequest $request)
    {
        Statu::create($request->all());
        return redirect('status')->with('mensaje','Estatus agregado corectamente!');
    }

    public function show(Statu $statu)
    {
        //
    }

    public function edit(Statu $statu)
    {
        return view('statu.edit',compact('statu'));
    }

    public function update(StatuRequest $request, Statu $statu)
    {
        //
    }

    public function destroy(Statu $statu)
    {
        $statu->delete();
        return redirect('status')->with('mensaje','Estado eliminado corectamente!');
    }
}
