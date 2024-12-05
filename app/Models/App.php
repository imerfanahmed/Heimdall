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

    protected $casts = [
        'webhooks' => 'array',
    ];

    //automatically set user id to the current user

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = auth()->id();
        });
    }


}
