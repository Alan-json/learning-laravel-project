<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected routes (only logged-in users can access)
Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --------------------------------------------------
    // User Management Routes (FULL CRUD)
    // --------------------------------------------------

    // List users
    Route::get('/dashboard/users', [UserController::class, 'index'])->name('users.index');

    // Create user form
    Route::get('/dashboard/users/create', [UserController::class, 'create'])->name('users.create');

    // Store new user
    Route::post('/dashboard/users', [UserController::class, 'store'])->name('users.store');

    // Edit user form
    Route::get('/dashboard/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

    // Update existing user
    Route::put('/dashboard/users/{user}', [UserController::class, 'update'])->name('users.update');

    // Delete user
    Route::delete('/dashboard/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
