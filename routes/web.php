<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TartaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})
->name("home");

Route::resource("productos", TartaController::class);
/*Route::get('/tarta', function () {
    return view('tarta/ppal');
})
    ->name("tarta");*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
