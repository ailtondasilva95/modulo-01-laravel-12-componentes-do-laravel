<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');