<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostLikeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Likes
// Route::post('/posts/{id}/likes', [PostLikeController::class, 'store'])->name('post.likes');

Route::post('/favorite/{post}', [PostLikeController::class, 'store'])->name('post.likes');

// Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.likes');


