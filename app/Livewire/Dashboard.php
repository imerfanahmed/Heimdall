<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Faker\Factory;

class Dashboard extends Component
{
    public $apps;
    public $appName;
    public $pusherReachable;

    public function isPusherReachable(): void
    {
        $url = 'http://127.0.0.1:6001/'; // Replace with your Pusher app URL

        try {
            $response = Http::get($url);

            if ($response->ok()) {
                $this->pusherReachable = true; // Pusher server is reachable
            } else {
                $this->pusherReachable = false; // Server responded but not as expected
            }
        } catch (\Exception $e) {
            // Handle connection failure
            $this->pusherReachable = false;
        }
    }

    public function boot(): void
    {
//        $this->isPusherReachable();
        $this->apps = \App\Models\App::all();
    }

    public function saveApp(): void
    {
        $this->validate([
            'appName' => 'required|min:6'
        ]);

        $app = \App\Models\App::create([
            'id' => Factory::create()->randomNumber(),
            'name' => $this->appName,
            'key' => Factory::create()->word,
            'secret' => Factory::create()->word
        ]);

        $this->redirect(route('dashboard'));

    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
