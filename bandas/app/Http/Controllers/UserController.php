<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

function index() { // listar
    $users = \App\Models\User::all();
    return view('users.index',compact('users') );
}

function store(Request $request) { // adicionar
   
     $user = new \App\Models\User();
     return view('users.store', compact('user'));
    //
}

// function listUsers() {
//     $users = \App\Models\User::all();
//     return response()->json($users);
// }

function update(Request $request, $id) {
    $user = \App\Models\User::find($id);
}

function destroy($id) {
    $user = \App\Models\User::find($id);
}
    //
}
