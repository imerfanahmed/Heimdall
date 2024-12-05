<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{

    public $active;
    public $id;

    public function boot()
    {
        $this->active = request()->route()->getName();
    }


    public function render()
    {
        return view('livewire.sidebar');
    }
}
