<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();
    return view('home', ['posts' => $posts]);
});

Route::get('/login', function () {
    return view ('login');
});

Route::get('/register', function () {
    return view ('register');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

// Blog post related routes :)
Route::post('/create-post', [PostController::class, 'createPost']);
Route::post('/get-posts', [PostController::class, 'getPosts']);
