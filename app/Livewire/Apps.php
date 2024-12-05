<?php

namespace App\Livewire;

use Faker\Factory;
use Illuminate\Support\Str;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Apps extends Component
{
    public $apps;
    public $appName;
    public function boot()
    {
        $this->apps = \App\Models\App::all();
    }
    public function saveApp(): void
    {
        $app = \App\Models\App::create([
            'name' => $this->appName,
            'key' => Str::random(15),
            'secret' => Str::random(15),
        ]);

        Toaster::success('App created successfully');

    }

    public function deleteApp($id): void
    {
        $app = \App\Models\App::find($id);
        $app->delete();
        $this->redirect(route('dashboard'));
    }
    public function render()
    {
        return view('livewire.apps');
    }
}
