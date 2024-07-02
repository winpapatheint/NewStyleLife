<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class LogEnv extends Command
{
    protected $signature = 'log:env';
    protected $description = 'Log environment variables';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Log::info('Environment variables:', $_ENV);
        Log::info('Current time: ' . now());
    }
}
