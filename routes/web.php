<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\IndexController;
// use App\Http\Controllers\MovieController;
// use App\Http\Controllers\VideogameController;
use Illuminate\Support\Facades\Route;

//default route
Route::get('/', [MovieController::class, 'index']);

//movies page
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::delete('/movies/{id}', [MovieController::class, 'delete']);

//rating a movie
Route::post('/movies/rate', [ReviewController::class, 'store']);
