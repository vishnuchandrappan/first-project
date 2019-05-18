<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class push extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push {commit_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Quick Method for git push';

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
        exec("git add .", $output);
        $this->comment( implode( PHP_EOL, $output ) );
        $temp = "git commit -m ".$this->argument('commit_name');
        exec($temp);
        $this->comment( implode( PHP_EOL, $output ) );
        exec("git push", $output);
        $this->comment( implode( PHP_EOL, $output ) );

    }
}
