<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OfficeController;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/office', [OfficeController::class, 'index'])->name('office');
Route::post('/office', [OfficeController::class, 'store']);

