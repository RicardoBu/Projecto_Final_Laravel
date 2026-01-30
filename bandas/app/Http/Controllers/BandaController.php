<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandaController extends Controller
{

function store(Request $request) { //adicionar
    $banda = new \App\Models\Banda();
    return view('bandas.store', compact('bandas'));
    //
}

function verBandaId($id) {//ver
    $banda = Banda::find($id);
    return view('bandas.see', compact('banda'));

}

function index() {//listar
    $bandas = \App\Models\Banda::all();
    return view('bandas.index', compact('bandas') );
    
}

function update(Request $request, $id) {//editar
    $banda = \App\Models\Banda::find($id);
}

function destroy($id) {//apagar

    $banda = Banda::findorFail($id);
    $banda->delete();
    return redirect()->route('bandas.index')->with('success', 'Banda apagada com sucesso!');
}
    //
}