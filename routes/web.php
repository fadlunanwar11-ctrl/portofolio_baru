<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
Route::get('/', function () {
    return view('home',['posts'=>Post::all()]);
});
Route::get('/galery', function () {
    return view('welcome');
});

