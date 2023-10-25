<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;


use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');

    // Rotta per mostrare il form di creazione di un nuovo progetto
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::get('/technology/create', [TechnologyController::class, 'create'])->name('technology.create');

    // Rotta per salvare un nuovo progetto nel database
    Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::post('/technology/store', [TechnologyController::class, 'store'])->name('technology.store');

    // Rotta per mostrare i dettagli di un progetto specifico
    Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show');
    Route::get('/technology/show/{id}', [TechnologyController::class, 'show'])->name('technology.show');

    // Modificare il progetto
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::get('/technology/edit/{id}', [TechnologyController::class, 'edit'])->name('technology.edit');

    // Update
    Route::put('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::put('/technology/update/{id}', [TechnologyController::class, 'update'])->name('technology.update');

    // Delete
    Route::delete('/project/destroy/{id}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::delete('/technology/destroy/{id}', [TechnologyController::class, 'destroy'])->name('technology.destroy');
});






require __DIR__.'/auth.php';
