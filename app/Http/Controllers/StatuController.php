<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Http\Requests\StoreStatuRequest;
use App\Http\Requests\UpdateStatuRequest;

class StatuController extends Controller
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
     * @param  \App\Http\Requests\StoreStatuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function show(Statu $statu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function edit(Statu $statu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatuRequest  $request
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatuRequest $request, Statu $statu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statu  $statu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statu $statu)
    {
        //
    }
}
