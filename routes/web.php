<?php

use App\Livewire\RegisterCompany;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])
    ->name('home');

Route::get('register-company', RegisterCompany::class)
    ->name('register-company');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
