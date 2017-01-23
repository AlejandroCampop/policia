<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    // ['Frecuencias y radio', 'frecuencias', 'settings_input_antenna'],
    public function index()
    {
        $links = [ ['Multas y sanciones', 'multas', 'euro_symbol'], ['Normativa', 'normativa-interna', 'class'], ['Lista del personal', 'lista', 'group'], ['Zonas de Asignación', 'zonas-de-asignacion', 'layers'],
        ['Especializaciones', 'especializacion', 'work']];
        return view('home')->with('links', $links);
    }

    public function about() {
        return view('about');
    }
}
