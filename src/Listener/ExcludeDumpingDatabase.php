<?php

namespace PavelMironchik\LaravelBackupPanel\Listener;

use Spatie\Backup\Events\DumpingDatabase;

class ExcludeDumpingDatabase
{
    public function handle(DumpingDatabase $event)
    {
        $event->dbDumper->excludeTables(config('laravel_backup_panel.backups.database.exclude_tables'));
    }

}