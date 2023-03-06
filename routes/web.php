<?php

use App\Http\Controllers\AdminDirectorController;
use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\PagesController;
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

Auth::routes();

//Admin
Route::middleware('can:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminDirectorController::class, 'index']);
    Route::get('/admin/create', [AdminDirectorController::class, 'create'])->name('create');
    Route::post('/admin', [AdminDirectorController::class, 'store']);
    Route::get('/admin/{admin:slug}/edit', [AdminDirectorController::class, 'edit']);
    Route::get('/admin/{admin:slug}', [AdminDirectorController::class, 'show']);
    Route::put('/admin/{admin}', [AdminDirectorController::class, 'update']);
    Route::delete('/admin/{admin}', [AdminDirectorController::class, 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', [MoviesController::class, 'index']);
    Route::get('/movies', [MoviesController::class, 'index']);
    Route::get('/movies/{movie}', [MoviesController::class, 'show']);
});

Route::get('/director/{director:slug}', [DirectorsController::class, 'show'])->middleware('auth');

Route::get('/{page}',PagesController::class)->where('page', 'about|contact');

