<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <livewire:sidebar :$id/>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <div>
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">App Overview</h3>
                                <div>
                                    <label class="form-check form-switch">
                                        <input wire:click="toggleAppEnable" class="form-check-input" type="checkbox"
                                            @checked($app->enabled)>
                                        <span class="form-check-label">
                                           <h3 class="h3 text-{{$app->enabled?"green":"danger"}}">
                                                App {{$app->enabled?"Enabled":"Disabled"}}
                                            </h3>
                                            <small>
                                                Created: {{$app->created_at->diffForHumans()}}
                                            </small>
                                        </span>
                                    </label>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                        <div class="card">
                                            <div class="card-stamp">
                                                <div class="card-stamp-icon bg-blue">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-label">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path
                                                            d="M16.52 7h-10.52a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h10.52a1 1 0 0 0 .78 -.375l3.7 -4.625l-3.7 -4.625a1 1 0 0 0 -.78 -.375"/>
                                                    </svg>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-id">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v10a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"/>
                                                        <path d="M9 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/>
                                                        <path d="M15 8l2 0"/>
                                                        <path d="M15 12l2 0"/>
                                                        <path d="M7 16l10 0"/>
                                                    </svg>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-key">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path
                                                            d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z"/>
                                                        <path d="M15 9h.01"/>
                                                    </svg>
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
                                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-xxx"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 8l4 8" /><path d="M10 16l4 -8" /><path d="M17 8l4 8" /><path d="M17 16l4 -8" /><path d="M3 8l4 8" /><path d="M3 16l4 -8" /></svg>
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
