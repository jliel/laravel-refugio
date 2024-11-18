<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AgregarController extends Controller
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
    public function agregarNuevo() {
        return view('perros/agregar_nuevo');
    }
}
