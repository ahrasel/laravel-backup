<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backup Destination
    |--------------------------------------------------------------------------
    |
    | Define the destination where the backup files will be stored.
    | You can adjust this based on your storage preferences.
    |
    */

    'backup' => [
        'destination' => [
            'filename_prefix' => 'backup_',
            'disks' => [
                'local',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Connection
    |--------------------------------------------------------------------------
    |
    | Define the database connection details for the backup.
    | You can adjust these based on your database configuration.
    |
    */

    'database' => [
        'connection' => env('DB_CONNECTION', 'mysql'),
        'mysql' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
        ],
        'pgsql' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
        ],
    ],

];
