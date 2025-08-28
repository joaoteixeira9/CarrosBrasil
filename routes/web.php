<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth');

Route::get('/user/perfil/{id}', [UserController::class, 'show'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
