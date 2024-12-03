<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/app/{id}', \App\Livewire\App::class)->name('app');
    Route::get('/app/{id}/credentials', \App\Livewire\Credentials::class)->name('app.credentials');
    Route::get('/app/{id}/configuration', \App\Livewire\Credentials::class)->name('app.configuration');
    Route::get('/app/{id}/webhooks', \App\Livewire\Webhooks::class)->name('app.webhooks');
    Route::get('/app/{id}/debug', \App\Livewire\Debug::class)->name('app.debug');
});


Route::get('trigger',function (){
        $options = array(
            'encrypted' => false,
            'scheme' => 'http',
            'host' => '127.0.0.1',
            'port' => 6001,
        );
        $pusher = new Pusher\Pusher(
            'dolor',
            'iure',
            '721328',
            $options,
        );
        $data = [
            'message' => 'Hello World',
            'time' => now()->toDateTimeString(),
        ];
        $event = 'my-event';

        $pusher->trigger('default', $event, $data);
});

Route::view('profile', 'profile')
     ->middleware(['auth'])
     ->name('profile');
require __DIR__.'/auth.php';
