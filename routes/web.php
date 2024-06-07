<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('partials.profile');
});


Route::get('/clients', function () {
    return view('partials.clients');
});


Route::get('/chat', function () {
   return view('partials.chat');
});

