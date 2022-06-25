<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EscritoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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
Route::get('/home',  [HomeController::class, 'index'])->name('blog.home');
Route::get('/contato', [ContatoController::class, 'create'])->name('blog.contato.create');
Route::post('/contato', [ContatoController::class, 'store'])->name('blog.contato.store');
Route::get('/escritores', EscritoresController::class)->name('blog.escritores');
Route::get('/posts/{post:slug}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/posts/{post:slug}', [PostsController::class, 'addComment'])->name('posts.add_comment');

require __DIR__.'/auth.php';
