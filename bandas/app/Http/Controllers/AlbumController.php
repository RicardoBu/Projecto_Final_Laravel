<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{

function store(Request $request) {
    $banda = new \App\Models\Banda();
    //
}

function index() {
    $albuns = \App\Models\Album::all();
    return view('albuns.list', compact('albuns') );
    
}

function update(Request $request, $id) {
    $album = \App\Models\Album::find($id);
}

function destroy($id) {
    $album = \App\Models\Album::find($id);
}
    //
}
