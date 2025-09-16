<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array<int, class-string>
     */
    protected $commands = [
      
       \App\Console\Commands\PushDummyJob::class,
        // Register your custom commands here
    // \App\Console\Commands\SendEmails::class,
        // \App\Console\Commands\SendEmails::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Example: Run your command daily at 8 AM
     //   $schedule->command('app:send-emails')->dailyAt('22:00')->timezone('Asia/Kolkata');
     $schedule->command('app:push-dummy-job')->everyMinute();
        // You can also schedule closures
        // $schedule->call(function () {
        //     \Log::info('This runs every day at 8 AM');
        // })->dailyAt('08:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

       // require base_path('routes/console.php');
    }
}
