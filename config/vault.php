<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Vault address
    |--------------------------------------------------------------------------
    |
    | For example: https://127.0.0.1:8200
    |
    */

    'address' => env('VAULT_ADDRESS', 'https://127.0.0.1:8200'),

    /*
    |--------------------------------------------------------------------------
    | Certificate
    |--------------------------------------------------------------------------
    |
    | A path to your certificate.
    |
    | E.g. 'file://path/to/public/key'
    |
    */

    'certificate' => env('VAULT_CERTIFICATE'),
];
