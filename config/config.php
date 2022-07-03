<?php

return [
    'environment' => env('DOKU_PRODUCTION', false),
    'shared_key' => env('DOKU_SECRET_KEY'),
    'client_id' => env('DOKU_CLIENT_ID')
];
