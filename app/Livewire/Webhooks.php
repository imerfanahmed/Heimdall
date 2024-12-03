<?php

namespace App\Livewire;

use Livewire\Component;

class Webhooks extends Component
{
    public $id;
    public $app;
    public $webhooks;
    public $url;
    public $events =[];
    public function boot()
    {
        $this->app = \App\Models\App::find($this->id);
    }

    public function save(){
        //validate url
        $this->validate([
            'url' => 'required|url'
        ]);
        //make url and webhooks array and save
        $webhook = [
            'url' => $this->url,
            'events' => $this->events
        ];
        dd($this->app->update(
            ['webhooks'=>json_encode($webhook)]
        ));

    }

    public function render()
    {
        return view('livewire.webhooks');
    }
}
