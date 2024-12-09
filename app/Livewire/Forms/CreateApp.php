<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;
use LivewireUI\Modal\ModalComponent;
use Masmerise\Toaster\Toaster;

class CreateApp extends ModalComponent
{
    public $appName;
    public function saveApp(): void
    {
        $this->validate([
            'appName' => 'required'
        ]);
        $app = \App\Models\App::create([
            'name' => $this->appName,
            'key' => Str::random(15),
            'secret' => Str::random(15),
            'webhooks' => [],
            'created_by' => auth()->id(),
        ]);

        if(!$app){
            Toaster::error('Error creating app');
            return;
        }

        Toaster::success('App created successfully');
        //reload the component
        $this->dispatch('reloadComponent');
        $this->closeModal();

    }
    public function render()
    {
        return view('livewire.create-app');
    }
}
