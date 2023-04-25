<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:db';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executing MySQL Database backup';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $database = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');
        $port = config('database.connections.mysql.port');

        $now = Carbon::now();
        $filename = storage_path('app/public/database/') . "backup-{$now->format('Y-m-d_H-i-s')}.sql";

        $command = "mysqldump --user={$username} --password={$password} --port={$port} --host={$host} {$database} > {$filename}";
        exec($command);

        $this->info('Database backup executed!');
    }

}
