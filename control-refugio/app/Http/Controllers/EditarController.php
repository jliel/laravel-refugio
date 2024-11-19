<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Perro;

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
    public function editar($id) {
        $perro = DB::table('perros')->where('id', $id)->first();
        return view('perros/editar', compact('perro'));
    }

    public function store(Request $request, $id) {
        $request->validate([
            'name'=> 'required',
            'raza'=> 'required',
            'color'=> 'required',
            'edad'=> 'required',
        ]);
        $perro = Perro::find($id);
        $perro->name = $request->name;
        $perro->color = $request->color;
        $perro->edad = $request->edad;
        $perro->raza = $request->raza;
        $perro->update();
        return redirect()->route('perros')->with('success','Perro actualizado');
    }
}
