<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportJobsListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importJobsList';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import a csv file containing a list of jobs into database';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('hello world.');
        $filename = storage_path('/docs/jobs-list.csv');
        $file = fopen($filename, "r");
        $all_data = array();
        while ( ($data = fgetcsv($file, 200, ",")) !==FALSE ) {
            dump($data);
        }
    }
}