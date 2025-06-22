<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/content', function () {
    return view('content');
});