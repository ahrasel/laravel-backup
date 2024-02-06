<?php

use Illuminate\Support\Facades\Route;
use Ahrasel\LaravelBackup\BackupController;

Route::get('/database-backup', [BackupController::class, 'createBackup']);
