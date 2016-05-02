<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class PullSource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'source:pull {version=5.2 : Laravel version, default 5.2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull laravel sources';

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
        $version = $this->argument('version');

        if (!file_exists(storage_path('sources/'.$version))) {
            if ($this->confirm(sprintf('Are you sure you want to download laravel %s [Y|n]', $version), true)) {

                $process = new Process('composer create-project --prefer-dist ' .
                    'laravel/laravel ./storage/sources/' . $version);
                $process->run();

                // executes after the command finishes
                if (!$process->isSuccessful()) {
                    throw new ProcessFailedException($process);
                }

                echo $process->getOutput();

            }
        }else{
            $this->info('Version already exists!');
        }
    }
}
