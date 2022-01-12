<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create_anagrama'])->name('create');
Route::post('create', [App\Http\Controllers\HomeController::class, 'anagrama'])->name('anagrama');
Route::get('/matriz', [App\Http\Controllers\HomeController::class, 'matriz'])->name('matriz');
Route::get('/sam', [App\Http\Controllers\HomeController::class, 'sam'])->name('sam');