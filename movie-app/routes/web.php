<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
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
    return view('index');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/movies/create', [MovieController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genre', [GenreController::class, 'index']);

Route::get('/genre/create', [GenreController::class, 'create']);

Route::post('/genre', [GenreController::class, 'store']);

Route::delete('/genre/{genre}', [GenreController::class, 'destroy']);

Route::get('/review', [ReviewController::class, 'index']);

Route::get('/review/create', [ReviewController::class, 'create']);

Route::post('/review', [ReviewController::class, 'store']);

Route::delete('/review/{review}', [ReviewController::class, 'destroy']);

Route::get('/user', function () {
    return view('user/index');
});
