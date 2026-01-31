<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

function index() { // listar
    $users = \App\Models\User::all();
    return view('users.index',compact('users') );
}


// Mostrar formulário
public function create() {
    return view('users.add_user'); // criar a view resources/views/users/create.blade.php
}
// Salvar usuário
public function store(Request $request) {
    
 $request->validate([
        'username' => 'required|string|max:50',
        'type' => 'required|string|max:50',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:4',
    ]);

    User::create([
        'username' => $request->username,
        'type' => $request->type,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
}
function verUserId($id) { // ver user individual
    $user = \App\Models\User::find($id);
    return view('users.details_user', compact('user'));
}

// function listUsers() {
//     $users = \App\Models\User::all();
//     return response()->json($users);
// }

function update(Request $request, $id) {
    $user = \App\Models\User::find($id);
}

function destroy($id) {
    

     DB::table('users')
        ->where('id', $id)
        ->delete();
 
 
        return back();
}
    //
}
