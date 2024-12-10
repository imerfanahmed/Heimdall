<?php

namespace App\Livewire;

use Livewire\Component;
use Pusher\Pusher;

class Debug extends Component
{
    public $id;

    public $app;

    public $channel;

    public $event;

    public $data;

    public function boot()
    {
        $this->app = \App\Models\App::find($this->id);
    }

    public function createEvent()
    {
        $options = [
            'encrypted' => config('soketi.scheme') === 'https',
            'scheme' => config('soketi.scheme'),
            'host' => config('soketi.host'),
            'port' => config('soketi.port'),
        ];
        $pusher = new Pusher(
            $this->app->key,
            $this->app->secret,
            $this->app->id,
            $options,
        );
        $event = $this->event;
        //dump(json_decode($this->data));

        $pusher->trigger($this->channel, $event, $this->data);
    }

    public function render()
    {
        return view('livewire.debug');
    }
}
