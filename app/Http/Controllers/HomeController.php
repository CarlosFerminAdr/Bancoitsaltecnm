<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Proyecto;
use App\Models\Proyectograma;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $convocatorias = Proyectograma::where('status', 3)->paginate(3);
        return view('home', compact('convocatorias'));
    }
}
