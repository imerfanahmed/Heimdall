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
        $webhook = [
            'url'    => $this->url,
            'events' => $this->events
        ];


        //get webhooks json if the webhook is empty add the webhook to the array
        $webhooks = $this->app->webhooks;
        $webhooks[] = $webhook;
        //update the app with the new webhooks
        $this->app->update([
            'webhooks' => $webhooks
        ]);
        //reset the url and events
        $this->url    = '';
        $this->events = [];
        Toaster::success('Webhook Created'); // 👈
    }


    public function delete($index)
    {
        //get webhooks json
        $webhooks = $this->app->webhooks;
        unset($webhooks[$index]);
        $this->app->update([
            'webhooks' => $webhooks
        ]);
        Toaster::success('Webhook Deleted'); // 👈
    }

    public function render()
    {
        return view('livewire.webhooks');
    }
}
