<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => [],
    'allowedHeaders' => ['ContentType', 'Authorization'],
    'allowedMethods' => ['POST', 'GET', 'PUT', 'DELETE'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
