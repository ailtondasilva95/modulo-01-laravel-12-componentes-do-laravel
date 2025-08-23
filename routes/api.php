<?php

use App\Http\Controllers\Api\ComponentController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('api/static-fullcalendar', [ComponentController::class, 'fullcalendarStaticApi'])
->name('api.static.fullcalendar');

Route::get('api/dinamic-fullcalendar', [ComponentController::class, 'fullcalendarDinamicApi'])
->name('api.dinamic.fullcalendar');

Route::get('api/static-chart-1', [ComponentController::class, 'chartStaticApi1'])
->name('api.static.chart1');

Route::get('api/static-chart-2', [ComponentController::class, 'chartStaticApi2'])
->name('api.static.chart2');

Route::get('api/dinamic-chart', [ComponentController::class, 'chartDinamic'])
->name('api.dinamic.chart');

//