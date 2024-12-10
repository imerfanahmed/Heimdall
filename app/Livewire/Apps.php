<?php

namespace App\Livewire;

use App\Models\App as Ap;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

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

    public function toggleAppEnable(Ap $app): void
    {
        $app->enabled = ! $app->enabled;
        $app->save();
        Toaster::success('App updated successfully');
        $this->dispatch('reloadComponent');
    }

    public function deleteApp($id): void
    {
        $app = \App\Models\App::find($id);
        $app->delete();
        Toaster::success('App deleted successfully');
        $this->dispatch('reloadComponent');
    }

    protected function getListeners(): array
    {
        return [
            'reloadComponent' => '$refresh',
        ];
    }

    public function render()
    {
        return view('livewire.apps');
    }
}
