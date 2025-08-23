<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('table', 'table', ['users' => User::paginate(5)])->name('table');
Route::view('fullcalendar', 'full-calendar')->name('fullcalendar');
Route::view('inputs-fields', 'inputs-fields')->name('inputs');
Route::view('chart', 'chart')->name('chart');
Route::view('/', 'home')->name('home');