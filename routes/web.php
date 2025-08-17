<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'home', ['users' => User::all()])->name('home');
Route::view('/', 'home', ['users' => User::paginate(5)])->name('home');

Route::view('welcome', 'welcome')->name('welcome');

// Rotas de usuário
Route::get('/users/{user}', fn(User $user) => "👤 <h1>Visualizando usuário: {$user->name}</h1>")->name('users.show');

Route::get('/users/{user}/edit', fn(User $user) => "✏️ <h1>Editando usuário: {$user->name}</h1>")->name('users.edit');

Route::delete('/users/{user}', fn(User $user) => response()->json([
    'message' => "🗑️ Usuário {$user->name} excluído com sucesso!",
], 200))->name('users.destroy');