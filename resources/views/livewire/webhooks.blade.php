<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <livewire:sidebar :$id/>
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
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(is_null($app->webhooks))
                                        <tr>
                                            <td colspan="2">No webhooks found</td>
                                        </tr>
                                    @else
                                        @foreach($app->webhooks as $index=> $webhook)
                                            <tr>
                                                <td>{{$webhook->url}}</td>
                                                <td>{{ join(' , ', $webhook->events) }}</td>
                                                <td>
                                                    <button wire:click="delete({{$index}})" class="btn btn-sm btn-danger">Delete</button>
                                            </tr>
                                        @endforeach
                                    @endif
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
