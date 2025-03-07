<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTartaRequest;
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

    public function store(StoreTartaRequest $request)
    {
        $datos = $request->input();
        $tarta = new Tarta($datos);
        $tarta->save();
        session()->flash("status","Se ha guardado \"$tarta->nombre\"");
        return redirect(route("tartas.index"));
    }

    public function destroy(Tarta $tarta)
    {
        $tarta->delete();
        session()->flash("status","\"$tarta->nombre\" ha sido eliminado de la base de datos.");
        return redirect(route("tartas.index"));

        //
    }

    public function edit(Tarta $tarta)
    {
        return view("tartas.edit",["tarta" => $tarta]);
    }
    public function update(Request $request, Tarta $tarta)
    {
        $tarta->update($request->input());
        session()->flash("status", "\"$tarta->nombre\" se ha actualizado correctamente.");
        return redirect(route("tartas.index"));
    }
}
