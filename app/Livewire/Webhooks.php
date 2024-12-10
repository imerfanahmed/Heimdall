<?php

namespace App\Livewire;

use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Webhooks extends Component
{
    public $id;
    public $app;
    public $webhooks;
    public $url;
    public $events = [];

    public function boot()
    {
        $this->app = \App\Models\App::find($this->id);
    }

    public function save()
    {
        //validate url
        $this->validate([
            'url' => 'required|url'
        ]);
        //make url and webhooks array and save
        $webhook    = [
            'url'    => $this->url,
            'event_types' => $this->events
        ];
        $webhooks   = $this->app->webhooks;
        $webhooks[] = $webhook;
        $this->app->update([
            'webhooks' => $webhooks
        ]);
        Toaster::success('Webhook Added'); // 👈
        $this->reset('url', 'events');
    }


    public function delete($index)
    {
        //get webhooks json
        $webhooks = $this->app->webhooks;

        $this->app->update([
            'webhooks' => $webhooks->except($index)->values()->toArray()
        ]);
        Toaster::success('Webhook Deleted'); // 👈
    }

    public function render()
    {
        return view('livewire.webhooks');
    }
}
