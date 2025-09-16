<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware('auth');

Route::get('/user/perfil/{id}', [UserController::class, 'show'])->middleware('auth');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::post('/user/confirm-edit/{id}', [UserController::class, 'update'])->middleware('auth');

Route::get('carros/compras/compras', [CarController::class, 'index']);
Route::get('carros/compras/search', [CarController::class, 'search'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
