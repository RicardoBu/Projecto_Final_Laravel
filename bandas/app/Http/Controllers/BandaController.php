<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;
use Illuminate\Support\Facades\DB;

class BandaController extends Controller
{

public function create() { //formulario adicionar
    return view('bandas.add_banda'); 
}

public function edit($id) { //formulario editar
    $banda = Banda::findOrFail($id);
    return view('bandas.edit', compact('banda'));
}
 public function store(Request $request) { //adicionar
   
    $request->validate([
        'nome' => 'required|string|max:50',
        'src_foto' => 'nullable|image|max:2048'
    ]);

    $caminhoFoto = null;
    if ($request->hasFile('src_foto')) {
        $caminhoFoto = $request->file('src_foto')->store('bandas', 'public');
    }

     DB::table('bandas')->insert([
        'nome' => $request->nome,
        'src_foto' => $caminhoFoto
    ]);

    // Banda::create([
    //     'nome' => $request->nome,
        
    // ]);

    return redirect()->route('bandas.index')->with('success', 'Banda adicionada com sucesso!');
    //
}

public function verBandaId($id) {//ver
    $bandas = Banda::find($id);
    return view('bandas.ver_banda_id', compact('bandas'));

}


public function index()
{
    $bandas = \App\Models\Banda::withCount('albuns')->get();

    return view('bandas.index', compact('bandas'));
}


public function update(Request $request, $id) {//editar
    // $banda = \App\Models\Banda::find($id);

    $request->validate([
        'nome' => 'required|string|max:50',
        'src_foto' => 'nullable|image|max:2048'
    ]);

    $banda = Banda::findOrFail($id);

    $banda->nome = $request->nome;

      if ($request->hasFile('src_foto')) {
        $caminhoFoto = $request->file('src_foto')->store('bandas', 'public');
        $banda->src_foto = $caminhoFoto;
    }

    $banda->save();


    return redirect()->route('bandas.index');


    // return view('bandas.update', compact('banda'));
}

function destroy($id) {//apagar

    $banda = Banda::findorFail($id);
    $banda->delete();
    return redirect()->route('bandas.index')->with('success', 'Banda apagada com sucesso!');
}
    //
}