<?php

use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\MoviesController;
use App\Models\Movie;
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

Route::middleware('auth')->get('/', function () {
    return view('movies', [
        'movies' => Movie::all()
    ]);
})->name('home');

Auth::routes();

Route::get('/', [MoviesController::class, 'index'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('movies', MoviesController::class);
    Route::get('/director/{director:slug}', [DirectorsController::class, 'show']);
});
