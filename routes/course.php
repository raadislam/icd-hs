<?php

use Illuminate\Support\Facades\Route;

Route::get('/authentication', function () {
    return view('theme_1.user-signin');
})->name('user-signin');

Route::get('/course', function () {
    return view('theme_1.user-course');
})->name('user-course');
