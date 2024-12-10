<?php

namespace App\Livewire;

use Livewire\Component;

class App extends Component
{
    public $id;

    public $app;

    public function mount($id)
    {
        $this->app = \App\Models\App::find($id);
    }

    public function toggleAppEnable(): void
    {
        $this->app->update([
            'enabled' => ! $this->app->enabled,
        ]);
    }

    public function render()
    {
        return view('livewire.app');
    }
}
