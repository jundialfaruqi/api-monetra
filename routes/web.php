<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Middleware\RequireLogin;
use App\Http\Controllers\AuthController;

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index')->middleware(RequireLogin::class);

Route::get('/users', function () {
    return view('user.index');
})->name('users.index')->middleware(RequireLogin::class);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
