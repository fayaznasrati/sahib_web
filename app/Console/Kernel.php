<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('posts:update-status')->daily();
        
        $schedule->call(function () {
            // Delete videos older than one day
            ShortVideo::where('created_at', '<', now()->subDay())->delete();
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    // protected $commands = [
    //     Commands\DeleteOldVideos::class,
    // ];

    
}
