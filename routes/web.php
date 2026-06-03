<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::Check()) {
        return view ('home', ['posts' => Post::all(), 'user' => Auth::user()]);
    } else {
        return redirect('/login');
    }
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
Route::get('/post', function () {
    if (Auth::Check()) {
        return view('/post', ['user' => Auth::user()]);
    } else {
        return redirect('/login');
    }
});
Route::get('/post/{post}', [PostController::class, 'showPostScreen']);
