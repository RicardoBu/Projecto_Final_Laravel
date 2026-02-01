<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use Illuminate\Support\Facades\DB;
class AlbumController extends Controller
{

public function create() {
    return view('albuns.add_album');
}

public function store(Request $request) {
    // $album = new \App\Models\Album();

     $request->validate([
        'nome' => 'required|string|max:50',
        'src_imagem' => 'nullable|image|max:2048',
        'banda_id' => 'required|exists:bandas,id',
        'data_lancamento' => 'nullable|date',

    ]);

    $caminhoImagem = null;
    if ($request->hasFile('src_imagem')) {
        $caminhoImagem = $request->file('src_imagem')->store('albuns', 'public');
    }

     DB::table('albuns')->insert([
        'nome' => $request->nome,
        'src_imagem' => $caminhoImagem,
        'banda_id' => $request->banda_id,
        'data_lancamento' => $request->data_lancamento,
        'created_at' => now(),
    'updated_at' => now(),
    ]);

     return redirect()->route('albuns.index')->with('success', 'Album adicionado com sucesso!');
    
}

public function verAlbumId($id) {//ver
    $album = Album::find($id);
    return view('albuns.ver', compact('album'));

}

public function index() {
    $albuns = \App\Models\Album::all();
    return view('albuns.index', compact('albuns') );
    
}

public function update(Request $request, $id) {
    $album = \App\Models\Album::find($id);
}

function destroy($id) {
    $album = \App\Models\Album::find($id);
}

public function verAlbunsBandaId($bandaId) {
    $albuns = Album::where('banda_id', $bandaId)->get();
    
    return view('albuns.details_album_banda_id', compact('albuns'));
    //
}
}