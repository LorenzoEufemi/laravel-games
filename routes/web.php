<?php

use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {

    return view('dashboard', [
            'user' => Auth::user(),
        ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('games', GameController::class)
    ->middleware(['auth', 'verified']);
    

require __DIR__.'/auth.php';
