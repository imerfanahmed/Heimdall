<?php

namespace App\Livewire;

use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Number;
use Livewire\Component;

class Dashboard extends Component
{
    public $serverStartedAt;

    public $usedMemory;

    public $totalMemory;

    public $memoryUsage;

    public $totalOpenConnections;

    public $isSoketiRunning;

    public $connectedApps;

    public function boot()
    {
        try {
            $isServerUp = Http::timeout(5)->get(config('soketi.url'));
            $responses = Http::pool(fn (Pool $pool) => [
                $pool->timeout(2)->get(config('soketi.usage_url')),
                $pool->timeout(2)->get(config('soketi.metrics_url')),
            ]);
            $usageResponse = json_decode($responses[0]->body())->memory;
            $metrics = $responses[1];

            $this->isSoketiRunning = $isServerUp->status() === 200;

            $soketiProcessRuntime = parse_prometheus('soketi_process_start_time_seconds', $metrics->body());
            $this->serverStartedAt = now()->subSeconds(time() - $soketiProcessRuntime->pluck('value')[0])->diffForHumans();

            $this->totalMemory = Number::fileSize($usageResponse->total);
            $this->usedMemory = Number::fileSize($usageResponse->used);
            $this->memoryUsage = round($usageResponse->percent, 2);

            $connectedMetrics = parse_prometheus('soketi_connected', $metrics->body());
            $this->connectedApps = $connectedMetrics->toArray();
            $this->totalOpenConnections = $connectedMetrics->pluck('value')->sum();

        } catch (\Exception $e) {
            $this->isSoketiRunning = false;
            $this->serverStartedAt = 'N/A';
            $this->totalMemory = 'N/A';
            $this->usedMemory = 'N/A';
            $this->memoryUsage = 0;
            $this->totalOpenConnections = 0;
            $this->connectedApps = [];
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
