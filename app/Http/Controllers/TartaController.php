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
}
