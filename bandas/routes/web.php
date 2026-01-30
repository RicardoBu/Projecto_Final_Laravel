<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//BANDAS

//Adicionar banda
Route::get('/bandas/adicionar', [BandaController::class,'store' ] )->name('bandas.store');

//Listar bandas
Route::get('/bandas', [BandaController::class,'index' ] )->name('bandas.index');

// Ver banda individual
Route::get('/bandas/{id}/', [BandaController::class,'verBandaId' ] )->name('bandas.ver_banda_id');

// listar albuns de uma banda
Route::get('/bandas/{banda}/albuns', [AlbumController::class,'verAlbunsBandaId' ] )->name('bandas.ver_albuns_banda_id');


//Editar bandas
Route::put('/bandas/{id}', [BandaController::class,'update' ] )->name('bandas.update');
//Apagar bandas
Route::delete('/bandas/{id}', [BandaController::class,'destroy' ] )->name('bandas.destroy');


//ALBUNS

//Adicionar album
Route::get('/albuns/adicionar', [AlbumController::class,'store' ] )->name('albuns.store');

//Listar albuns
Route::get('/albuns', [AlbumController::class,'index' ] )->name('albuns.index');

// Ver album individual
Route::get('/albuns/{id}', [AlbumController::class,'verAlbumId' ] )->name('albuns.ver_album_id');

//Editar albuns
Route::put('/albuns/{id}', [AlbumController::class,'update' ] )->name('albuns.update');
//Apagar albuns
Route::delete('/albuns/{id}', [AlbumController::class,'destroy' ] )->name('albuns.destroy');



//USERS

//Adicionar user
Route::get('/users/adicionar', [UserController::class,'store' ] )->name('users.store');

//Listar users
Route::get('/users', [UserController::class,'index' ] )->name('users.index');

// Ver user individual
Route::get('/users/{id}', [UserController::class,'verUserId' ] )->name('users.ver_user_id');

//Editar users
Route::put('/users/{id}', [UserController::class,'update' ] )->name('users.update');
//Apagar users
Route::delete('/users/{id}', [UserController::class,'destroy' ] )->name('users.destroy');