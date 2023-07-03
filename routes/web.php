<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('user/{user}', [\App\Http\Controllers\UserController::class, 'showUser']);


Route::prefix('usuarios')->group(function(){

    Route::get('', function(){
        return 'usuario';
    })->name('usuarios');

    Route::get('/{id}', function(){
        return 'Mostrar detalhes';
    })->name('show-usuario');

    Route::get('/{id}/tags', function(){
        return 'tags usuario';
    })->name('tags-usuario');
});


// Opcionais
Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
    //return view('welcome');
})->name('a-empresa');

// varios parâmetros
Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . '-' . $paramB;
    //return view('welcome');
});
