<?php

namespace App\Http\Controllers;

use App\Models\Solicita;
use App\Http\Requests\StoreSolicitaRequest;
use App\Http\Requests\UpdateSolicitaRequest;

class SolicitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSolicitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSolicitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicita  $solicita
     * @return \Illuminate\Http\Response
     */
    public function show(Solicita $solicita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicita  $solicita
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicita $solicita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSolicitaRequest  $request
     * @param  \App\Models\Solicita  $solicita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSolicitaRequest $request, Solicita $solicita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicita  $solicita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicita $solicita)
    {
        //
    }
}
