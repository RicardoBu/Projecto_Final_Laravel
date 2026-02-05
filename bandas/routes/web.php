<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('auth')->get('/teste-login', function () {
//     dd(auth()->user());
// });


Route::middleware('auth')->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('bandas', BandaController::class);
        // ->except(['index', 'show']);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('albuns', AlbumController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
        
});

// listar albuns de uma banda
Route::get('/bandas/{banda}/albuns', [AlbumController::class,'verAlbunsBandaId' ] )->name('bandas.ver_albuns_banda_id');





// Route::middleware('auth')->group(function () {
//     Route::get('/bandas/{id}/edit', [BandaController::class,'edit' ] )->name('bandas.edit');
//     Route::put('/bandas/{id}', [BandaController::class,'update' ] )->name('bandas.update');
// });

// Route::get('/bandas', [BandaController::class,'index' ] )->name('bandas.index');





//BANDAS

// //formulario adicionar banda
// Route::get('/bandas/adicionar', [BandaController::class,'create' ] )->name('bandas.add_banda');

// // Receber o POST do formulário
// Route::post('/bandas/adicionar', [BandaController::class,'store'])->name('bandas.store');

// //Listar bandas
// Route::get('/bandas', [BandaController::class,'index' ] )->name('bandas.index');


// // listar albuns de uma banda
// Route::get('/bandas/{banda}/albuns', [AlbumController::class,'verAlbunsBandaId' ] )->name('bandas.ver_albuns_banda_id');

// //formulario editar banda
// Route::get('/bandas/{id}/edit', [BandaController::class,'edit' ] )->name('bandas.edit');


// //Editar bandas
// Route::put('/bandas/{id}', [BandaController::class,'update' ] )->name('bandas.update');
// //Apagar bandas
// Route::delete('/bandas/{id}', [BandaController::class,'destroy' ] )->name('bandas.destroy');

// // Ver banda individual
// Route::get('/bandas/{id}/', [BandaController::class,'verBandaId' ] )->name('bandas.ver_banda_id');


//ALBUNS

// //formulario adicionar album
// Route::get('/albuns/adicionar', [AlbumController::class,'create' ] )->name('albuns.add_album');

// // Receber o POST do formulário
// Route::post('/albuns/adicionar', [AlbumController::class,'store'])->name('albuns.store');

// //Listar albuns
// Route::get('/albuns', [AlbumController::class,'index' ] )->name('albuns.index');

// // Ver album individual
// Route::get('/albuns/{id}', [AlbumController::class,'verAlbumId' ] )->name('albuns.ver_album_id');

// //formulario editar album
// Route::get('/albuns/{id}/edit', [AlbumController::class,'edit' ] )->name('albuns.edit');


// //Editar albuns
// Route::put('/albuns/{id}', [AlbumController::class,'update' ] )->name('albuns.update');
// //Apagar albuns
// Route::delete('/albuns/{id}', [AlbumController::class,'destroy' ] )->name('albuns.destroy');



//USERS

// //formulario adicionar user
// Route::get('/users/adicionar', [UserController::class,'create' ] )->name('users.add_user');

// // Receber o POST do formulário
// Route::post('/users/adicionar', [UserController::class,'store'])->name('users.store');

// //Listar users
// Route::get('/users', [UserController::class,'index' ] )->name('users.index');

// // Ver user individual
// Route::get('/users/{id}', [UserController::class,'verUserId' ] )->name('users.details_user');

// //Editar users
// Route::put('/users/{id}', [UserController::class,'update' ] )->name('users.update');
// //Apagar users
// Route::delete('/users/{id}', [UserController::class,'destroy' ] )->name('users.destroy');