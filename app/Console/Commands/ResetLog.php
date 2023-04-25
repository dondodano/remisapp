<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Log file clearing command';

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
        $file = fopen(storage_path('logs/laravel.log'),"w");
        fwrite($file,"");
        fclose($file);

        $this->comment('Logs have been cleared!');
    }
}
