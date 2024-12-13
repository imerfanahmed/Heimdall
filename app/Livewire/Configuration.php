<?php

namespace App\Livewire;

use Livewire\Component;
use Toaster;

class Configuration extends Component
{
    public $id;

    public $app;

    public $enabled;

    public $name;

    public $enableClientEvents;

    public $enableAuthorizedConnection;

    public $maxConnections;

    public $maxBackendEventsPerSecond;

    public $maxClientEventsPerSecond;

    public $maxReadRequestsPerSecond;

    public $maxChannelNameLength;

    public $maxEventNameLength;

    public $maxPresenceMembersPerChannel;

    public $maxEventChannelsAtOnce;

    public $maxEventBatchSize;

    public $maxPresentMemberSizeInKB;

    public $maxEventPayloadSizeInKB;

    public function boot()
    {
        $this->app = \App\Models\App::find($this->id);
        $this->enabled = $this->app->enabled;
        $this->name = $this->app->name;
        $this->enableClientEvents = $this->app->enable_client_messages;
        $this->enableAuthorizedConnection = $this->app->enable_user_authentication;
        $this->maxConnections = $this->app->max_connections;
        $this->maxBackendEventsPerSecond = $this->app->max_backend_events_per_sec;
        $this->maxClientEventsPerSecond = $this->app->max_client_events_per_sec;
        $this->maxReadRequestsPerSecond = $this->app->max_read_req_per_sec;
        $this->maxChannelNameLength = $this->app->max_channel_name_length;
        $this->maxEventNameLength = $this->app->max_event_name_length;
        $this->maxPresenceMembersPerChannel = $this->app->max_presence_members_per_channel;
        $this->maxEventChannelsAtOnce = $this->app->max_event_channels_at_once;
        $this->maxEventBatchSize = $this->app->max_event_batch_size;
        $this->maxPresentMemberSizeInKB = $this->app->max_presence_member_size_in_kb;
        $this->maxEventPayloadSizeInKB = $this->app->max_event_payload_in_kb;

    }

    public function saveApp()
    {
//        dd($this->app);
        $this->app->update([
            'enabled' => $this->enabled,
            'name' => $this->name,
            'enable_client_messages' => $this->enableClientEvents,
            'enable_user_authentication' => $this->enableAuthorizedConnection,
            'max_connections' => $this->maxConnections,
            'max_backend_events_per_sec' => $this->maxBackendEventsPerSecond,
            'max_client_events_per_sec' => $this->maxClientEventsPerSecond,
            'max_read_req_per_sec' => $this->maxReadRequestsPerSecond,
            'max_channel_name_length' => $this->maxChannelNameLength,
            'max_event_name_length' => $this->maxEventNameLength,
            'max_presence_members_per_channel' => $this->maxPresenceMembersPerChannel,
            'max_event_channels_at_once' => $this->maxEventChannelsAtOnce,
            'max_event_batch_size' => $this->maxEventBatchSize,
            'max_presence_member_size_in_kb' => $this->maxPresentMemberSizeInKB,
            'max_event_payload_in_kb' => $this->maxEventPayloadSizeInKB,
        ]);

        Toaster::success('App updated successfully');

    }

    public function render()
    {
        return view('livewire.configuration');
    }
}
