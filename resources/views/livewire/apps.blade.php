<div class="container-xl">
    <div class="row my-3">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Total Apps
                    </h4>
                    <h1>
                        {{ $totalApps }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Active Apps
                    </h4>
                    <h1>
                        {{ $activeApps }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Inactive Apps
                    </h4>
                    <h1>
                        {{ $inactiveApps }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list my-4">
            <a class="btn btn-primary btn" data-bs-toggle="modal"
               data-bs-target="#exampleModal">
                <i class="ti ti-plus"></i>
                Create New App
            </a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive bg-white">
            <table class="table table-striped table-hover table-vcenter my-3">
                <thead>
                <tr>
                    <th>App ID</th>
                    <th>App Name</th>
                    <th>App Key</th>
                    <th>App Secret</th>
                    <th>Active Status</th>
                    <th>Owner</th>
                    <th>Created At</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @if(!count($apps))
                    <tr>
                        <td colspan="8" class="text-center">No Apps Found</td>
                    </tr>
                @endif

                @foreach($apps as $app)
                    <tr wire:key="app-{{$app->id }}">
                        <td>{{$app->id}}</td>
                        <td>{{$app->name}}</td>
                        <td>{{$app->key}}</td>
                        <td>{{$app->secret}}</td>
                        <td>
                            <div>
                                <label class="form-check form-switch">
                                    <input wire:key="app-{{$app->id}}" wire:click="toggleAppEnable({{$app}})"
                                           class="form-check-input"
                                           type="checkbox"
                                        @checked($app->enabled)>
                                </label>
                            </div>
                        </td>
                        <td>{{$app->user->name}}</td>
                        <td>{{ $app->created_at->diffForHumans() }}</td>
                        <td>
                            <button wire:navigate href="{{route('app',[$app->id])}}" >
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                            </button>
                            <button wire:click="deleteApp({{$app->id}})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="red"
                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                     class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 7l16 0"/>
                                    <path d="M10 11l0 6"/>
                                    <path d="M14 11l0 6"/>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>


    <div class="modal modal-blur fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-new-app">New App</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit="saveApp">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">App Name</label>
                            <input wire:model="appName" type="text" class="form-control" name="example-text-input" placeholder="any-name">
                        </div>
                        <div>
                            @error('appName') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Create App</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
