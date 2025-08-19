<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home', ['users' => User::paginate()])->name('home');

Route::view('welcome', 'welcome')->name('welcome');