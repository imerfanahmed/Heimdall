<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
{{--                        <h4 class="subheader">Business settings</h4>--}}
                        <div class="list-group list-group-transparent">
                            <a wire:navigate href="" class="list-group-item list-group-item-action d-flex align-items-center active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 icon
                                      icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"/>
                                    <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"/>
                                    <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1"/>
                                    <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1"/>
                                </svg>
                                Overview
                            </a>
                            <a wire:navigate href="{{route('app.credentials',[$id])}}" class="list-group-item list-group-item-action d-flex
                            align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 icon
                                      icon-tabler icons-tabler-outline icon-tabler-lock-access">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2"/>
                                    <path d="M4 16v2a2 2 0 0 0 2 2h2"/>
                                    <path d="M16 4h2a2 2 0 0 1 2 2v2"/>
                                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2"/>
                                    <path d="M8 11m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z"/>
                                    <path d="M10 11v-2a2 2 0 1 1 4 0v2"/>
                                </svg>
                                Credentials
                            </a>
                            <a wire:navigate href="{{route('app.webhooks',[$id])}}" class="list-group-item list-group-item-action d-flex
                            align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 icon
                                      icon-tabler icons-tabler-outline icon-tabler-webhook">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M4.876 13.61a4 4 0 1 0 6.124 3.39h6"/>
                                    <path d="M15.066 20.502a4 4 0 1 0 1.934 -7.502c-.706 0 -1.424 .179 -2 .5l-3 -5.5"/>
                                    <path d="M16 8a4 4 0 1 0 -8 0c0 1.506 .77 2.818 2 3.5l-3 5.5"/>
                                </svg>
                                Webhooks</a>
                            <a wire:navigate href="{{route('app.configuration',[$id])}}" class="list-group-item list-group-item-action d-flex
                            align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 icon
                                      icon-tabler icons-tabler-outline icon-tabler-settings">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path
                                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"/>
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                                </svg>
                                Configuration</a>
                            <a wire:navigate href="{{route('app.debug',[$id])}}" class="list-group-item list-group-item-action d-flex
                            align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 icon
                                      icon-tabler icons-tabler-outline icon-tabler-bug">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 9v-1a3 3 0 0 1 6 0v1"/>
                                    <path d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3"/>
                                    <path d="M3 13l4 0"/>
                                    <path d="M17 13l4 0"/>
                                    <path d="M12 20l0 -6"/>
                                    <path d="M4 19l3.35 -2"/>
                                    <path d="M20 19l-3.35 -2"/>
                                    <path d="M4 7l3.75 2.4"/>
                                    <path d="M20 7l-3.75 2.4"/>
                                </svg>
                                Debug</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <div>
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">App Overview</h3>
                                <div class="div">
                                    <h3 class="h3 text-{{$app->enabled?"green":"danger"}}">
                                        App {{$app->enabled?"Enabled":"Disabled"}}
                                    </h3>
                                    <smal>
                                        Created: {{$app->created_at->diffForHumans()}}
                                    </smal>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <div class="card-stamp">
                                                <div class="card-stamp-icon bg-blue">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                                    <i class="ti ti-id"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">App name</h3>
                                                <p class="text-secondary">{{$app->name}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <div class="card-stamp">
                                                <div class="card-stamp-icon bg-blue">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                                    <i class="ti ti-cards"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">App ID</h3>
                                                <p class="text-secondary">{{$app->id}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <div class="card-stamp">
                                                <div class="card-stamp-icon bg-blue">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                                    <i class="ti ti-key"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">App Key</h3>
                                                <p class="text-secondary">{{$app->key}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <div class="card-stamp">
                                                <div class="card-stamp-icon bg-blue">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                                    <i class="ti ti-password"></i>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h3 class="card-title">App Secret</h3>
                                                <p class="text-secondary">{{Str::mask($app->secret,'*',2,6)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $config = collect($app)->except(['name','id','secret','key','webhooks','created_at','updated_at']);
                                @endphp
                                <div class="row mt-3">
                                    <h1>App Configurations</h1>
                                    <div class="table border p-2">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter card-table">
                                                <thead>
                                                <tr>
                                                    <th>Configuration</th>
                                                    <th>Value</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($config as $key => $value)
                                                    <tr>
                                                        <td>{{$key}}</td>
                                                        <td>{{($value===-1 or $value===9999)? "∞":$value}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
