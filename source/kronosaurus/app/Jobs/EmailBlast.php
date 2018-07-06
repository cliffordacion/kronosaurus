<?php

namespace App\Jobs;

use \Mail;
use \App\User;
use \App\Mail\TestEmailOnQueue;
use \App\Providers\EmailServiceProvider;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class EmailBlast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailSender;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = User::find(1);
        Mail::to('cliffordacion@gmail.com')->send(new TestEmailOnQueue($user));
    }
}
