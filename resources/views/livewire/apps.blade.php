<div class="container-xl">
    <div class="row my-3">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Total Apps
                    </h4>
                    <h1>
                        5
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
                        3
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
                        2
                    </h1>
                </div>
            </div>
        </div>
    </div>









        <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
                <a class="btn btn-primary btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="ti ti-plus"></i>
                    Create New App
                </a>
            </div>
        </div>
        <div class="row">
            @foreach($apps as $app)
                <div class="col-md-3 my-2" wire:key="app-{{ $app->id }}">
                    <a class="card card-link card-link-rotate">
                        <div class="card-header justify-content-between">
                            <h1 class="card-title">
                                <i class="ti ti-id-badge"></i>
                                Name : {{ $app->name }}
                            </h1>
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
                        </div>
                        <div class="card-body" wire:navigate href="{{route('app',[$app->id])}}" wire:key="app-{{ $app->id }}">
                            <div class="">
                                <div>
                                    <i class="ti ti-id"></i>
                                    ID : {{ $app->id}}
                                </div>
                                <div>
                                    <i class="ti ti-key"></i>
                                    Key : {{ $app->key}}
                                </div>
                                <div>
                                    <i class="ti ti-password"></i>
                                    Secret : {{ Str::mask($app->secret,'*',2,6) }}
                                </div>
                                <div>
                                    <i class="ti ti-clock"></i>
                                    Created : {{ $app->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

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
