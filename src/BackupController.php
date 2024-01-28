<?php

namespace Ahrasel\LaravelBackup;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BackupController
{
    public function createBackup()
    {
        try {
            $backupService = new BackupService();
            $filename = $backupService->backup();

            // Return the backup file as a download response
            return response()->download(storage_path("app/backups/$filename"))->deleteFileAfterSend(true);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
