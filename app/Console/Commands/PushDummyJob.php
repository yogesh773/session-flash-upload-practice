<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\DummyJob;

class PushDummyJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:push-dummy-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        DummyJob::dispatch();
        $this->info('dummy job pushed to quere!!');
    }
}
