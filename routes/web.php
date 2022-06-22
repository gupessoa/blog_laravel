<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return view('home');
})->name('blog.home');
Route::get('/contato', function () {
    return view('blog.contato');
})->name('blog.contato');
Route::get('/escritores', function () {
    return view('blog.escritores');
})->name('blog.escritores');
Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');

require __DIR__.'/auth.php';
