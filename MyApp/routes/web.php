<?php

use App\Http\Controllers\AnalisisController;
use App\Models\categories;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('nose', [AnalisisController::class, 'index'])->name('pruebas.home');
Route::get('visualizar/{visualizar}', [AnalisisController::class, 'visualizar'])->name('pruebas.visualizar');
Route::get('create', [AnalisisController::class, 'create'])->name('pruebas.create');
Route::post('create', [AnalisisController::class, 'ingresar'])->name('pruebas.create');
Route::get('visualizar/{visualizar}/edit', [AnalisisController::class, 'edit'])->name('pruebas.edit');
Route::put('visualizar/{visualizar}', [AnalisisController::class, 'update'])->name('pruebas.update');
Route::delete('visualizar/{visualizar}', [AnalisisController::class, 'destroy'])->name('pruebas.destroy');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
