<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
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

Route::get('businesses', [BusinessController::class, 'index']);
Route::get('user/{user}', [UserController::class, 'showUser']);
Route::get('users', [UserController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
