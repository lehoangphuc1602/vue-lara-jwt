<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::post('/auth/register', [AuthController::class, 'register']);
// Route::post('/auth/login', [AuthController::class, 'login'])->name("login");

// Route::apiResource('todos', TodoController::class)->middleware('auth:sanctum');

// Route::prefix('auth')
// ->middleware('auth')
// ->controller(AuthController::class)
// ->name("auth.")
// ->group(function(){
//      Route::post('/login','login')->name('login');
//      Route::post('/register','register')->name('register');
// });
Route::get("/{vue_capture?}",function(){
    return view('welcome');
})->where('vue_capture','[\/\w\.-]*');
// Route::get("/",function(){
//     return view('welcome');
// });