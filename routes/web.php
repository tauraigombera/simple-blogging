<?php

//use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorPostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikesController;
use Illuminate\Support\Facades\Route;

//pages
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('membership', [MembershipController::class, 'index'])->name('membership');

//all posts
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//comments
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

//likes
Route::post('posts/{post}/likes', [PostLikesController::class, 'store']);
Route::delete('posts/{post}/likes', [PostLikesController::class, 'destroy']);

//author's posts
Route::get('author/posts', [AuthorPostsController::class, 'index'])->middleware('auth');
Route::get('author/posts/create', [AuthorPostsController::class, 'create'])->middleware('auth');
Route::post('author/posts', [AuthorPostsController::class, 'store'])->middleware('auth');
Route::get('author/posts/{post}/edit', [AuthorPostsController::class, 'edit'])->middleware('auth');
Route::patch('author/posts/{post}', [AuthorPostsController::class, 'update'])->middleware('auth');
Route::delete('author/posts/{post}', [AuthorPostsController::class, 'destroy'])->middleware('auth');

//categories
Route::get('admin/categories', [CategoryController::class, 'index'])->middleware('auth');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->middleware('auth');
Route::post('admin/categories', [CategoryController::class, 'store'])->middleware('auth');
Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])->middleware('auth');
Route::patch('admin/categories/{category}', [CategoryController::class, 'update'])->middleware('auth');
Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->middleware('auth');

require __DIR__.'/auth.php';
