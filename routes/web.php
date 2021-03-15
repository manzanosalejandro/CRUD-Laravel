<?php

use Illuminate\Support\Facades\Route;

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
})->name("principal");

Auth::routes();

Route::get('/home', [App\Http\Controllers\EstudianteController::class, 'index'])->name('home');
Route::get("estudiante",[\App\Http\Controllers\EstudianteController::class]);


