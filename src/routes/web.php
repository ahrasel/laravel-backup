<?php

use Illuminate\Support\Facades\Route;
use Ahrasel\LaravelBackup\BackupController;

Route::get('/backup', [BackupController::class, 'createBackup']);
