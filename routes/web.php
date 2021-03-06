<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/' , [PostController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//User post
Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

//Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');


//Likes
// Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('post.likes');
// Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.likes');



//like routes
Route::post('/like', [PostLikeController::class, 'getlike']);
Route::post('/like/{id}', [PostLikeController::class, 'like']);
//dislike routes
Route::post('/dislike', [PostLikeController::class, 'getDislike']);
Route::post('/dislike/{id}', [PostLikeController::class, 'dislike']);


