<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <livewire:sidebar :$id/>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                        <form wire:submit="saveApp" class="m-4">
                            <div class="col">
                                <label class="form-label">App Name</label>
                                <input wire:model="name" type="text" class="form-control" name="channel" value="{{$app->name}}"/>
                            </div>

                            <div class=" col">
                                <label class="form-check form-switch">
                                    Enable App
                                    <input wire:key="app-{{$app->id}}" wire:model="enabled"
                                           class="form-check-input"
                                           type="checkbox"
                                        @checked($app->enabled)>
                                </label>
                            </div>

                            <div class="col">
                                <label class="form-check form-switch">
                                    Enable client events
                                    <input wire:key="app-{{$app->id}}" wire:model="enableClientEvents"
                                           class="form-check-input"
                                           type="checkbox"
                                        @checked($app->enable_client_messages)>
                                </label>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-check form-switch">
                                    Enable authorized connection
                                    <input wire:key="app-{{$app->id}}" wire:model="enableAuthorizedConnection"
                                           class="form-check-input"
                                           type="checkbox"
                                        @checked($app->enable_user_authentication)>
                                </label>
                            </div>
                            <hr>
                            <div class="mb-3 col">
                                <label class="form-label">Max Connections</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_connection}}" wire:model="maxConnections"/>
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label">Max Backend Events Per Second</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_backend_events_per_sec}}"
                                       wire:model="maxBackendEventsPerSecond"/>
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label">Max client events per second</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_client_events_per_sec}}"
                                       wire:model="maxClientEventsPerSecond"/>
                            </div>
                            <div class="mb-3 col">
                                <label class="form-label">Max read request per second</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_read_req_per_sec}}"
                                       wire:model="maxReadRequestsPerSecond"/>
                            </div>
                            <hr>

                            <div class="mb-3 col">
                                <label class="form-label">Max channel name length</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_channel_name_length}}"
                                       wire:model="maxChannelNameLength"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label">Max Event Name Length</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_event_name_length}}"
                                       wire:model="maxEventNameLength"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label">Max presence member per channel</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_presence_members_per_channel}}"
                                       wire:model="maxPresenceMembersPerChannel"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label">Max event channels at once</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_event_channels_at_once}}"
                                       wire:model="maxEventChannelsAtOnce"/>
                            </div>


                            <hr>
                            <div class="mb-3 col">
                                <label class="form-label">Max event batch size</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_event_batch_size}}"
                                       wire:model="maxEventBatchSize"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label">Max presence member size in kb</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_presence_member_size_in_kb}}"
                                       wire:model="maxPresentMemberSizeInKB"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label">Max event payload size in kb</label>
                                <input type="text" class="form-control" name="channel" value="{{$app->max_event_payload_in_kb}}"
                                       wire:model="maxEventPayloadSizeInKB"/>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
