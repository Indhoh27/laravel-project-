<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('pages.dashboard');
Route::get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');

Route::resource('users', UserController::class);
