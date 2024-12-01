<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $apps;
    public $appName;

    public function mount()
    {
        $this->apps = \App\Models\App::all();
    }

    public function saveApp()
    {
        $this->validate([
            'appName' => 'required|min:6'
        ]);

        $app = \App\Models\App::create([
            'name' => $this->appName,
            'key' => \Illuminate\Support\Str::random(10),
            'secret' => \Illuminate\Support\Str::random(10)
        ]);

    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
