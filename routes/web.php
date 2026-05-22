<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return view('home',['posts'=>Post::all()]);
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/post/create', function () {
    return view('/post/create');
});
Route::resource('posts', PostController::class);
