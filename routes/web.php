<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\StasiunController;

Route::get('/', function () {
    return view('home');
});
Route::prefix('tiket')->name('tiket.')->group(function() {
    Route::get('/', [TiketController::class, 'index'])->name('index');
    Route::get('/tambah', [TiketController::class, 'create'])->name('create');
    Route::post('/store', [TiketController::class, 'store'])->name('store');
    Route::get('/{id}', [TiketController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [TiketController::class, 'update'])->name('update');
    Route::delete('/{id}', [TiketController::class, 'destroy'])->name('destroy');
});
    
Route::prefix('stasiun')->name('stasiun.')->group(function () {
    Route::get('/', [StasiunController::class, 'index'])->name('index');
    Route::get('/tambah', [StasiunController::class, 'create'])->name('create');
    Route::post('/store', [StasiunController::class, 'store'])->name('store');
    Route::get('/{id}', [StasiunController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [StasiunController::class, 'update'])->name('update');
    Route::delete('/{id}', [StasiunController::class, 'destroy'])->name('destroy');
});
