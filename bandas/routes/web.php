<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandaController;

Route::get('/', function () {
    return view('welcome');
});

//BANDAS

//Adicionar banda
Route::get('/bandas/adicionar', [BandaController::class,'store' ] )->name('bandas.store');

//Listar bandas
Route::get('/bandas', [BandaController::class,'index' ] )->name('bandas.index');

//Editar bandas
Route::put('/bandas/{id}', [BandaController::class,'update' ] )->name('bandas.update');
//Apagar bandas
Route::delete('/bandas/{id}', [BandaController::class,'destroy' ] )->name('bandas.destroy');


//ALBUNS

//Adicionar album
Route::get('/albuns/adicionar', [BandaController::class,'store' ] )->name('albuns.store');

//Listar albuns
Route::get('/albuns', [BandaController::class,'index' ] )->name('albuns.index');

//Editar albuns
Route::put('/albuns/{id}', [BandaController::class,'update' ] )->name('albuns.update');
//Apagar albuns
Route::delete('/albuns/{id}', [BandaController::class,'destroy' ] )->name('albuns.destroy');



//USERS

//Adicionar user
Route::get('/users/adicionar', [BandaController::class,'store' ] )->name('users.store');

//Listar users
Route::get('/users', [BandaController::class,'index' ] )->name('users.index');

//Editar users
Route::put('/users/{id}', [BandaController::class,'update' ] )->name('users.update');
//Apagar users
Route::delete('/users/{id}', [BandaController::class,'destroy' ] )->name('users.destroy');