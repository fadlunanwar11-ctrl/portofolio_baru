<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryControllerS;

Route::get('/', function () {
    return view('home',['posts'=>Post::all()]);
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/about', function () {
    return view('about');
});

Route::resource('posts', PostController::class)
     ->except(['show']);
Route::resource('galleries', GalleryController::class)
    ->except(['show']);     