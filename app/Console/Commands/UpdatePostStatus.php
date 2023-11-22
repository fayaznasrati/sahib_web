<?php

namespace App\Console\Commands;

use App\Models\Posts;
use App\Models\CRUD;
use Carbon\Carbon;
use Illuminate\Console\Command;


class UpdatePostStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the status of posts after 30 days';

    /**
     * Execute the console command.
     */

  
   
    public function handle()
    {
        $posts = Posts::where('status', 1)   // post will be deactivated after 30 days passed
        ->where('updated_at', '<=', Carbon::now()->subDays(30))
        ->get();

    foreach ($posts as $post) {
        $post->status = 0;
        $post->expired_at = Carbon::now();
        $post->save();
    }

    $this->info('Post statuses updated successfully!');

    return 0;

    }
}
