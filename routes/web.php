<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/users', function () {
    return view('user.index');
})->name('users.index');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
