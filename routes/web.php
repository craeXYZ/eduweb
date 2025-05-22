<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/lessons', function () {
    return view('pages.lessons');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});
