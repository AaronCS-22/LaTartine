<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TartaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})
->name("home");

Route::get('/contacto', function () {
    return view('contacto');
})
    ->name("contacto");

Route::resource("/tartas", TartaController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
