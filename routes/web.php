<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/app', Dashboard::class)->name('app');

});

Route::view('profile', 'profile')
     ->middleware(['auth'])
     ->name('profile');
require __DIR__.'/auth.php';
