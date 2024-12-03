<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        {{--                        <h4 class="subheader">Business settings</h4>--}}
                        <div class="list-group list-group-transparent">
                            <a wire:navigate href="{{route('app',[$id])}}" class="list-group-item list-group-item-action d-flex align-items-center">
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
                            <a wire:navigate href="{{route('app.webhooks',[$id])}}" class=" active list-group-item list-group-item-action d-flex
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
                        <div class="mb-3">
                            <h1 class="page-title">
                                Webhooks
                            </h1>
                            <div class="m-2">
                                <form wire:submit="save()" class="row">
                                    <div class="mb-3">
                                        <label class="form-label">URL</label>
                                        <input wire:model.blur="url" type="text" class="form-control" name="host" value="example.com"/>
                                    </div>
                                    @error('url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="form-label">Choose Events</label>
                                        <div class="form-check form-check-inline">
                                            <input wire:model.blur="events" class="form-check-input" type="checkbox" id="clientEvent"
                                                   value="client_event">
                                            <label class="form-check-label" for="clientEvent">Client Event</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input wire:model.blur="events" class="form-check-input" type="checkbox" id="channelOccupied"
                                                   value="channel_occupied">
                                            <label class="form-check-label" for="channel_occupied">channel Occupied</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input wire:model.blur="events" class="form-check-input" type="checkbox" id="channelVacated"
                                                   value="channel_vacated">
                                            <label class="form-check-label" for="channelVacated">Channel Vacated</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input wire:model.blur="events" class="form-check-input" type="checkbox" id="memberAdded"
                                                   value="member_added">
                                            <label class="form-check-label" for="memberAdded">Member Added</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input wire:model.blur="events" class="form-check-input" type="checkbox" id="memberRemoved"
                                                   value="member_removed">
                                            <label class="form-check-label" for="memberRemoved">Member Removed</label>
                                        </div>



                                    </div>


                                    <button type="submit" class="btn btn-primary">Create Webhook</button>
                                </form>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                    <tr>
                                        <th>URL</th>
                                        <th>Events</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($webhooks as $webhook)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$webhook->url}}</td>--}}
{{--                                            <td>{{$webhook->events}}</td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}

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
