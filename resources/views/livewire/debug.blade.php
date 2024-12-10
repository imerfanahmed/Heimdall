<div wire:ignore class="page-body" x-data="debugScreen()">
    <div class="container-xl">
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <livewire:sidebar :$id/>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <div class="mb-3">
                            <h1 class="page-title">Debug</h1>
                            <div class="row">
                                <div class="col-auto ms-auto">
                                    <a class="btn btn-primary btn" data-bs-toggle="modal" data-bs-target="#createEvent">
                                        <i class="ti ti-plus"></i>
                                        Create Event
                                    </a>
                                </div>
                            </div>

                            <div class="m-2">
                                <form @submit.prevent="setChannel" class="row">
                                    <div class="mb-3 col">
                                        <label class="form-label">Channel</label>
                                        <input type="text" class="form-control" name="channel" value="default" x-model="channelName"/>
                                    </div>
                                    <button type="submit" id="subscribe" href="#" class="btn btn-primary">Subscribe to Debug</button>
                                </form>
                            </div>


                            <div class="divide-y">
                                <template x-for="event in events" :key="event.id">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <strong x-text="event.eventName"></strong> event at
                                                <div x-text="new Date(event.id)
                                                        .toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' })"></div>
                                            </div>
                                            <pre class="my-2" x-text="event.data"></pre>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-blur fade" id="createEvent" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-new-app">Create Event</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="createEvent">
                    <div class="modal-body row ">
                        <div class="mb-3 col-6">
                            <label class="form-label">Channel Name</label>
                            <input wire:model="channel" type="text" class="form-control" name="channel" placeholder="channel" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Event Name</label>
                            <input wire:model="event" type="text" class="form-control" name="eventName" placeholder="subscribe" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <textarea class="form-control" wire:model="data" name="" id="" cols="30" rows="10" required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Create Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        function debugScreen() {
            return {
                channelName: '',
                currentChannel: '',
                events: [],

                setChannel() {
                    // Disconnect from previous channel if any
                    if (this.currentChannel) {
                        this.disconnect();
                    }

                    // Connect to new channel
                    this.currentChannel = this.channelName;
                    this.connect();
                },

                connect() {
                    // Set up Soketi (Pusher) client for the new channel
                    let pusher = new Pusher('{{$app->key}}', {
                        wsHost: '{{config('soketi.host')}}',
                        wssPort: '{{config('soketi.port')}}',
                        wsPort: '{{config('soketi.port')}}',
                        forceTLS: '{{config('soketi.scheme')}}' === 'https',
                        encrypted: '{{config('soketi.scheme')}}' === 'https',
                        disableStats: true,
                        enabledTransports: ['ws', 'wss'],
                    });

                    let channel = pusher.subscribe(this.currentChannel);
                    channel.bind_global((eventName, eventData) => {

                        this.events.push({
                            id: Date.now(),
                            eventName: eventName,
                            data: eventData ? eventData : 'No data'
                        });

                        // Limit number of events to avoid overloading
                        if (this.events.length > 100) {
                            this.events.shift();
                        }
                    });

                    this.channel = channel;
                },

                disconnect() {
                    // Unsubscribe and clean up the current channel
                    if (this.channel) {
                        this.channel.unsubscribe();
                        this.channel = null;
                    }
                    this.events = [];
                    this.currentChannel = '';
                },
            };
        }
    </script>
</div>
