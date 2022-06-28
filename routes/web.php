<?php

use App\Http\Controllers\AdminControllers\AdminCategoriesController;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\AdminPostsController;
use App\Http\Controllers\AdminControllers\TinyMCEController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EscritoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagController;
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
Route::get('/categorias/{category:slug}',[CategoriaController::class, 'show'])->name('categories.show');
Route::get('/tags/{tag:name}',[TagController::class, 'show'])->name('tags.show');



Route::prefix('admin')->name('admin.')->middleware('auth', 'isadmin')->group( function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::post('upload_tinymce_image', [TinyMCEController::class, 'upload_tinymce_image'])->name('upload_tinymce_image');
    Route::resource('posts', AdminPostsController::class);
    Route::resource('categories', AdminCategoriesController::class);
});

require __DIR__.'/auth.php';
