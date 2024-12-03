<?php

namespace App\Livewire;

use Livewire\Component;

class Credentials extends Component
{
    public $id;
    public $app;

    public function mount($id)
    {
        $this->app = \App\Models\App::find($id);
    }
    public function render()
    {
        return view('livewire.credentials');
    }
}
