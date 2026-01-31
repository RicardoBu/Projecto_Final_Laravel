<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandaController extends Controller
{

public function create() { //formulario adicionar
    return view('bandas.add_banda'); // criar a view resources/views/bandas/add_banda.blade.php
}
 public function store(Request $request) { //adicionar
   

    $request->validate([
        'nome' => 'required|string|max:50',
        
    ]);

    Banda::create([
        'nome' => $request->nome,
        
    ]);

    return redirect()->route('bandas.index')->with('success', 'Usuário criado com sucesso!');
    //
}

public function verBandaId($id) {//ver
    $bandas = Banda::find($id);
    return view('bandas.ver_banda_id', compact('bandas'));

}

public function index() {//listar
    $bandas = \App\Models\Banda::all();
    return view('bandas.index', compact('bandas') );
    
}

public function update(Request $request, $id) {//editar
    $banda = \App\Models\Banda::find($id);
}

function destroy($id) {//apagar

    $banda = Banda::findorFail($id);
    $banda->delete();
    return redirect()->route('bandas.index')->with('success', 'Banda apagada com sucesso!');
}
    //
}