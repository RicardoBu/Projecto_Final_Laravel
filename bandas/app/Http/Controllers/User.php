<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilizadorController extends Controller
{

function adduser(Request $request) {
   
     $user = new \App\Models\User();
    //
}

function listUsers() {
    $users = \App\Models\User::all();
    return response()->json($users);
}

function editUser(Request $request, $id) {
    $user = \App\Models\User::find($id);
}

function deleteUser($id) {
    $user = \App\Models\User::find($id);
}
    //
}
