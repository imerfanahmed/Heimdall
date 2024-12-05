<div class="container-xl">
    <div class="card my-3">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <span id="indicator" class="status-indicator {{$isSoketiRunning?'status-green':'status-red'}} status-indicator-animated">
                  <span class="status-indicator-circle"></span>
                  <span class="status-indicator-circle"></span>
                  <span class="status-indicator-circle"></span>
                </span>
                </div>
                <div class="col">
                    <h2 class="h3">
                        Soketi server running at: <a href="{{config('soketi.url')}}">
                            {{config('soketi.url')}}</a>
                    </h2>
                    <div class="text-secondary">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li id="status" class="list-inline-item "><span
                                    class="{{$isSoketiRunning?'text-green':'text-red'}}">{{$isSoketiRunning?'Up':'Down'}}</span></li>
                            <li class="list-inline-item">Checked every 2.5 Seconds</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row my-3">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Server Started
                    </h4>
                    <h1 wire:poll>
                        {{$serverStartedAt}}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Total Memory Usage
                    </h4>
                    <h1>
                        {{$usedMemory}} of {{$totalMemory}} ({{$memoryUsage}}%)
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Total Open Connections
                    </h4>
                    <h1 wire:poll.keep-alive>
                        {{$totalOpenConnections}}
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Connected Apps
                    </h3>
                </div>

                <div class="table-responsive">
                    <table class="table table-vcenter">
                        <thead>
                        <tr>
                            <th>App ID</th>
                            <th>Total Connections</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>54584848</td>
                            <td class="text-secondary">
                                2000
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
    </div>
</div>

</div>
