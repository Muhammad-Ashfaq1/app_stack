<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');



Route::get('/client', [HomeController::class, 'clientView'])->name('clients')->middleware('auth');
Route::get('/profile', [HomeController::class, 'profileView'])->name('profile')->middleware('auth');
Route::get('/chat', [HomeController::class, 'chatView'])->name('chat')->middleware('auth');


Route::get('/signup', [AuthController::class, 'signupView'])->name('signup');
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.action');
Route::post('/singup', [AuthController::class, 'signupStore'])->name('signup.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');






Route::controller(StudentController::class)->prefix('students')->group(function () {
    Route::get('/', 'index')->name('students');
    Route::get('/add-student', 'studentsView')->name('students.view');
    Route::post('/add-student', 'addStudent')->name('students.add');
    Route::get('/edit-student/{id}', 'editStudent')->name('students.edit');
    Route::post('/edit-student/{id}', 'updateStudent')->name('students.update');
    Route::get('/delete-student/{id}', 'deleteStudent')->name('students.delete');
});
