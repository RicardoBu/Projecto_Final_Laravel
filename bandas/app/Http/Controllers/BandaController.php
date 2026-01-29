<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banda;

class BandaController extends Controller
{

function store(Request $request) { //adicionar
    $banda = new \App\Models\Banda();
    //
}

function index() {//listar
    $bandas = \App\Models\Banda::all();
    return response()->json($bandas);
}

function update(Request $request, $id) {//editar
    $banda = \App\Models\Banda::find($id);
}

function destroy($id) {//apagar
    $banda = \App\Models\Banda::find($id);
}
    //
}