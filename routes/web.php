<?php

use App\Livewire\Apps;
use App\Livewire\Credentials;
use App\Livewire\Dashboard;
use App\Livewire\Debug;
use App\Livewire\Webhooks;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'pages.auth.login')
    ->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/apps', Apps::class)->name('apps');
    Route::get('/app/{id}', \App\Livewire\App::class)->name('app');
    Route::get('/app/{id}/credentials', Credentials::class)->name('app.credentials');
    Route::get('/app/{id}/configuration', Credentials::class)->name('app.configuration');
    Route::get('/app/{id}/webhooks', Webhooks::class)->name('app.webhooks');
    Route::get('/app/{id}/debug', Debug::class)->name('app.debug');
});


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
require __DIR__.'/auth.php';
