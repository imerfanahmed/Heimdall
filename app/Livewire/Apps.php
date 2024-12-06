<?php

namespace App\Livewire;

use Faker\Factory;
use Illuminate\Support\Str;
use Livewire\Component;
use Masmerise\Toaster\Toaster;
use App\Models\App as Ap;

class Apps extends Component
{
    public $apps;
    public $appName;
    public $totalApps;
    public $activeApps;
    public $inactiveApps;
    public function boot()
    {
        $this->apps = \App\Models\App::all();
        $this->totalApps = $this->apps->count();
        $this->activeApps = $this->apps->where('enabled', true)->count();
        $this->inactiveApps = $this->apps->where('enabled', false)->count();
    }
    public function saveApp(): void
    {
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
        $this->redirect(route('apps'));

    }

    public function toggleAppEnable(Ap $app): void
    {
        //if the app is enabled, disable it
        if ($app->enabled) {
            $app->update([
                'enabled' => false
            ]);
            Toaster::success('App disabled successfully');
            $this->redirect(route('apps'));
        } //if the app is disabled, enable it
        else {
            $app->update([
                'enabled' => true
            ]);
            Toaster::success('App enabled successfully');
            $this->redirect(route('apps'));
        }
    }

    public function deleteApp($id): void
    {
        $app = \App\Models\App::find($id);
        $app->delete();
        Toaster::success('App deleted successfully');
        $this->redirect(route('apps'));
    }
    public function render()
    {
        return view('livewire.apps');
    }
}
