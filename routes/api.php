<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Exemplo de retorno de eventos estáticos
Route::get('/api.static-events', function () {
    $events = [
        [
            'title' => 'Event json 1',
            'start' => '2023-01-01',
            'end' => '2023-01-02',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 2',
            'start' => '2023-01-05',
            'end' => '2023-01-06',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 3',
            'start' => '2023-01-10',
            'end' => '2023-01-12',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 4',
            'start' => '2023-01-15',
            'end' => '2023-01-16',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 5',
            'start' => '2023-01-20',
            'end' => '2023-01-22',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 6',
            'start' => '2023-01-25',
            'end' => '2023-01-26',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 7',
            'start' => '2023-01-30',
            'end' => '2023-01-31',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 8',
            'start' => '2023-02-01',
            'end' => '2023-02-02',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 9',
            'start' => '2023-02-05',
            'end' => '2023-02-06',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 10',
            'start' => '2023-02-10',
            'end' => '2023-02-12',
            'color' => fake()->hexColor()
        ],
        [
            'title' => 'Event json 11',
            'start' => '2023-02-15 15:30:00',
            'color' => fake()->hexColor(),
            'editable' => false
        ],
        [
            'title' => 'Event json 12',
            'start' => '2023-02-19 15:30:00',
            'color' => fake()->hexColor(),
            'editable' => false
        ]
    ];

    return response()->json($events);
})->name('api.static.events');

// Exemplo de retorno de eventos dinâmicos
Route::get('/api.dinamic-events', function () {

    $users = User::all()->map(fn($user) => [
        'title' => $user->name,
        'start' => $user->created_at->format('Y-m-d'),
        'color' => '#' . Str::padLeft(dechex(crc32($user->id)), 6, '0'),
        'editable' => rand(0, 1) ? true : false,
        // 'end'   => $user->updated_at->format('Y-m-d'),
        // 'color' => fake()->hexColor(),
    ]);


    return response()->json($users);
})->name('api.dinamic.events');