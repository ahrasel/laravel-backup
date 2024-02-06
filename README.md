# Database Backup Laravel Package

## Introduction

The Database Backup Laravel Package is a convenient solution for backing up MySQL and PostgreSQL databases in a Laravel application. It provides a simple endpoint `/database-backup` to trigger the backup process.

## Installation

1. Install the package using Composer:

   ```bash
   composer require ahrasel/laravel-backup
   ```

2. Register the `BackupServiceProvider` in your `config/app.php`:

   ```php
   'providers' => [
       // ...
        Ahrasel\LaravelBackup\BackupServiceProvider::class,
   ],
   ```

## Configuration

The package comes with default configurations. If you need to customize the configuration, publish the configuration file using the following command:

```bash
php artisan vendor:publish --provider=" Ahrasel\LaravelBackup\BackupServiceProvider" --tag="config"
```

This will create a `backup.php` file in your `config` directory.

## Usage

Once installed and configured, you can trigger a database backup by hitting the `/database-backup` endpoint in your Laravel application.

Example:

```bash
http://localhost:8000/database-backup
```

You can also integrate this endpoint into your application as needed, for example, by creating a scheduled task to run the backup at specific intervals.

## License

This Laravel package is open-sourced software licensed under the [MIT license](LICENSE).

## Issues and Contributions

If you encounter any issues or have suggestions for improvements, feel free to open an issue on the [GitHub repository](https://github.com/ahrasel/laravel-backup).

Happy coding!
