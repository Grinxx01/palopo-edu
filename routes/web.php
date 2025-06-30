<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstitusiController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit']);
Route::resource('institusi', App\Http\Controllers\InstitusiController::class);
Route::get('/institusi/{id}', [InstitusiController::class, 'show'])->name('institusi.show');
