<?php

namespace App\Http\Controllers;

use App\Models\Programa;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proyectos = Proyecto::where('status', '3')->paginate(3);
        return view('banco.proyecto', compact('proyectos'));
    }

    public function create()
    {
        $programas = Programa::where('status', '3')->paginate(3);
        return view('banco.programa', compact('programas'));
    }

}
