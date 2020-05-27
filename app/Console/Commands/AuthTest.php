<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class AuthTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $startTime = microtime(true);
        $this->comment('Starting test...');

        $endPoint = 'http://firefly.local/';

        $response = Http::get($endPoint . 'oauth/authorize');
        dd($response);


        $endTime = round(microtime(true) - $startTime, 4);
        $this->comment(sprintf('Test completed. Took %s second(s) to run.', $endTime));
    }
}
