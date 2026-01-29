<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandaController extends Controller
{

function addBanda(Request $request) {
    $banda = new \App\Models\Banda();
    //
}

function listBandas() {
    $bandas = \App\Models\Banda::all();
    return response()->json($bandas);
}

function editBanda(Request $request, $id) {
    $banda = \App\Models\Banda::find($id);
}

function deleteBanda($id) {
    $banda = \App\Models\Banda::find($id);
}
    //
}