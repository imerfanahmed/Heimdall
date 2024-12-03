<?php

namespace App\Livewire;

use Livewire\Component;

class Debug extends Component
{

    public $id;
    public $app;
    public function boot()
    {
        $this->app = \App\Models\App::find($this->id);
    }

    public function render()
    {
        return view('livewire.debug');
    }
}
