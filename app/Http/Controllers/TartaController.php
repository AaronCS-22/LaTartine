<?php

namespace App\Http\Controllers;

use App\Models\Tarta;
use Illuminate\Http\Request;

class TartaController extends Controller
{
    public function index(){
        $tartas = Tarta::all();
        return view('tarta.index', ['tartas' => $tartas]);
    }

    public function create()
    {
        return view("tarta.crear");
    }

    public function destroy(Tarta $tarta)
    {
        $tarta->delete();
        session()->flash("status","\"$tarta->nombre\" ha sido eliminado de la base de datos.");
        return redirect(route("tartas.index"));

        //
    }
}
