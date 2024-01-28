<?php

namespace Ahrasel\LaravelBackup;

use Illuminate\Support\ServiceProvider;

class BackupServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // dd(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
}
