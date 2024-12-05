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
                            <h4>Credentials</h4>
                            <div>
                                <i class="ti ti-clock"></i>
                                Created : {{ $app->created_at->diffForHumans() }}
                            </div>
                            <pre>
<code class="h4">
PUSHER_APP_ID = {{ $app->id }}
PUSHER_APP_KEY = {{ $app->key }}
PUSHER_APP_SECRET = {{ $app->secret }}
PUSHER_HOST = {{config('soketi.host')}}
PUSHER_PORT = {{config('soketi.port')}}
PUSHER_SCHEME= {{config('soketi.scheme')}}
</code></pre>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
