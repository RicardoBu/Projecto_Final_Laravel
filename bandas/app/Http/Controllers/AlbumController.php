<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{

public function store(Request $request) {
    $album = new \App\Models\Album();
    // $album->nome = $request->input('nome');
    // $album->source_imagem = $request->input('source_imagem');
    // $album->banda_id = $request->input('banda_id');
    // $album->save();
}

public function verAlbumId($id) {//ver
    $album = Album::find($id);
    return view('albuns.ver_album_id', compact('album'));

}

public function index() {
    $albuns = \App\Models\Album::all();
    return view('albuns.index', compact('albuns') );
    
}

public function update(Request $request, $id) {
    $album = \App\Models\Album::find($id);
}

public function destroy($id) {
    $album = \App\Models\Album::find($id);
}

public function verAlbunsBandaId($bandaId) {
    $albuns = Album::where('banda_id', $bandaId)->get();
    return view('albuns.details_album_banda_id', compact('albuns'));
    //
}
}