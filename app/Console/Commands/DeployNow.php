<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class DeployNow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deploy:now';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Signify that the system is deployed';

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
        /**
         * Run Clear
         */
        Artisan::call('view:clear');
        Artisan::call('route:cache');
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');


        /**
         * Run Optimize command
         */
        Artisan::call('optimize');

        /**
         * Rund Storage Link
         */
        Artisan::call('storage:link');


        /**
         * Verify directory existence
         */
        $dirList = ['attachment', 'avatar', 'backups', 'database', 'favicon', 'images', 'media', 'temp'];
        $dirRoot = storage_path('app/public/');
        foreach($dirList as $dirItem)
        {
            if(!is_dir($dirRoot . $dirItem))
            {
                mkdir($dirRoot . $dirItem);
            }
        }

        /**
         * Call Migrate
         */
        Artisan::call('migrate');


        /**
         * Call Seed
         */
        Artisan::call('db:seed');


        /**
         * Create Production File
         */
        $path = storage_path('framework/') . 'production';
        if(file_exists( $path))
        {
            unlink($path);
            writeFile($path,'true');

        }else{
            writeFile($path,'true');
        }

        $this->info('System deployed!');
    }
}
