<?php

use App\Http\Controllers\ComponentController;
use Illuminate\Support\Facades\Route;

Route::get('fullcalendar', [ComponentController::class, 'fullCalendar'])->name('fullcalendar');
Route::get('inputs-fields', [ComponentController::class, 'inputField'])->name('inputs');
Route::get('table', [ComponentController::class, 'table'])->name('table');
Route::get('chart', [ComponentController::class, 'chart'])->name('chart');
Route::get('/', [ComponentController::class, 'home'])->name('home');

//