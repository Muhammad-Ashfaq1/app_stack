<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/client', [HomeController::class, 'clientView'])->name('clients');
Route::get('/profile', [HomeController::class, 'profileView'])->name('profile');
Route::get('/chat', [HomeController::class, 'chatView'])->name('chat');


