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
    ];

    public function getWebhooksAttribute($value)
    {
        return json_decode($value);
    }

    public function setWebhooksAttribute($value): void
    {
        $this->attributes['webhooks'] = json_encode($value);
    }
}
