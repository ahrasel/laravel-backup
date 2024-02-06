<?php

namespace Ahrasel\LaravelBackup;

class BackupService
{
    public function backup()
    {
        $databaseType = config('database.default');

        if ($databaseType === 'mysql') {
            return $this->backupMysql();
        } elseif ($databaseType === 'pgsql') {
            return $this->backupPostgresql();
        } else {
            throw new \Exception('Unsupported database type');
        }
    }

    private function backupMysql()
    {
        $databaseName = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $filename = 'backup_' . date('YmdHis') . '.sql';

        $command = "mysqldump -u $username -p$password $databaseName > " . $filename;

        // Execute the command
        $status =  exec($command);

        return $filename;
    }

    private function backupPostgresql()
    {
        $databaseName = config('database.connections.pgsql.database');
        $username = config('database.connections.pgsql.username');
        $password = config('database.connections.pgsql.password');
        $filename = 'backup_' . date('YmdHis') . '.sql';

        $command = "pg_dump -U $username -d $databaseName -h localhost > " . $filename;

        // Execute the command
        exec($command);

        return $filename;
    }
}
