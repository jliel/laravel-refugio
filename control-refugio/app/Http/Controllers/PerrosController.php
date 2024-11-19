<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perro;

class PerrosController extends Controller
{
    public function borrar($id) {
        Perro::find($id)->delete();
        return redirect()->route('perros')->with('success','Eliminado');
    }

    public function perfil($id) {
        $perro = Perro::find($id);
        return view('perros/perfil', compact('perro'));
    }
}
