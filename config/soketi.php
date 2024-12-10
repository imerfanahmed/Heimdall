<?php
return [
    'host' => env('SOKETI_HOST', '127.0.0.1'),
    'port' => env('SOKETI_PORT', 6001),
    'scheme' => env('SOKETI_SCHEME', 'http'),
    'url' => env('SOKETI_SCHEME', 'http').'://'. env('SOKETI_HOST', '127.0.0.1').':'.env('SOKETI_PORT', 6001),
    'usage_url' => 'http://'. env('SOKETI_HOST', '127.0.0.1').':'.'9601/usage',
    'metrics_url' => 'http://'. env('SOKETI_HOST', '127.0.0.1').':'.'9601/metrics',
];
