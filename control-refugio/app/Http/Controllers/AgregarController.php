<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perro;



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
    public function store(Request $request) {
        $request->validate([
            'name'=> 'required',
            'raza'=> 'required',
            'color'=> 'required',
            'edad'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);
        $perro = new Perro();
        $perro->name = $request->name;
        $perro->color = $request->color;
        $perro->edad = $request->edad;
        $perro->raza = $request->raza;
        $perro->image = 'image/'.$imageName;
        $perro->save();
        return redirect()->route('perros')->with('success','Perro agregado');
    }
}

