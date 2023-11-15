<?php

use App\Http\Controllers\CinestarController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(CinestarController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('cines', 'cines')->name('cines');
    Route::get('pelicula/{id}','pelicula')->name('pelicula');
    Route::get('peliculas/{id}','peliculas')->name('peliculas');
    Route::get('cine/{id}','cine')->name('cine');
});
