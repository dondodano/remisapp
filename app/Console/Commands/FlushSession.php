<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FlushSession extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'flush:session';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all sessions';

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
        $driver = config('session.driver');
        $method_name = 'clean' . ucfirst($driver);
        if ( method_exists($this, $method_name) ) {
            try {
                $this->$method_name();
                $this->info('Session data cleaned.');
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        } else {
            $this->error("Sorry, I don't know how to clean the sessions of the driver '{$driver}'.");
        }
    }

    /**
     * Function
     */
    protected function cleanFile () {
        $directory = config('session.files');
        $ignoreFiles = ['.gitignore', '.', '..'];

        $files = scandir($directory);

        foreach ( $files as $file ) {
            if( !in_array($file,$ignoreFiles) ) {
                unlink($directory . '/' . $file);
            }
        }
    }

    protected function cleanDatabase () {
        $table = config('session.table');
    }
}
