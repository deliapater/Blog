<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/posts', [BlogController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [BlogController::class, 'show'])->name('posts.show');
Route::post('/posts/{id}/comments', [BlogController::class, 'storeComment'])->name('posts.store');

