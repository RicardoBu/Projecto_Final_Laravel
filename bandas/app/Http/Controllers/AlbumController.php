<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{

function addAlbum(Request $request) {
    $banda = new \App\Models\Banda();
    //
}

function listAlbuns() {
    $albuns = \App\Models\Album::all();
    return response()->json($albuns);
}

function editAlbum(Request $request, $id) {
    $album = \App\Models\Album::find($id);
}

function deleteAlbum($id) {
    $album = \App\Models\Album::find($id);
}
    //
}
