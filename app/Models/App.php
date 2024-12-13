<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'key',
        'secret',
        'max-connections',
        'enable_client_messages',
        'enabled',
        'max_backend_events_per_sec',
        'max_client_events_per_sec',
        'max_read_req_per_sec',
        'webhooks',
        'created_by',
        'max_channel_name_length',
        'max_event_name_length',
        'max_presence_members_per_channel',
        'max_event_channels_at_once',
        'max_event_batch_size',
        'max_presence_member_size_in_kb',
        'max_event_payload_in_kb',
        'enable_user_authentication'
    ];

    protected $casts = [
        'webhooks' => 'collection',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
