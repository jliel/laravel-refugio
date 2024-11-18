<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarController extends Controller
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
    public function editar() {
        return view('perros/editar');
    }
}
