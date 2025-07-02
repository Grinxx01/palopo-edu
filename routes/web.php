<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\AuthController;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/about', 'about')->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit']);
Route::resource('institusi', App\Http\Controllers\InstitusiController::class);
Route::get('/institusi/{id}', [InstitusiController::class, 'show'])->name('institusi.show');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');