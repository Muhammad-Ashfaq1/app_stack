<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listing', function () {
    return view('partials.listing');
});

Route::get('/products', function () {
    return view('partials.products');
});

