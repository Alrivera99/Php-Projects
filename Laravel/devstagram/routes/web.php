<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('principal');
});

Route::get('/register', [RegisterController::class, 'crear'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store']);

Route::post('/logout', [\App\Http\Controllers\LogoutController::class, 'store'])->name('logout');


Route::get('/{user:username}', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
