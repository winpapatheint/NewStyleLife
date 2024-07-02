<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LogTime extends Command
{
    protected $signature = 'log:time';
    protected $description = 'Log the current time';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Log::info('Current time: ' . now());
    }
}
