<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\TestEmailOnQueue;
use \Mail;
use \App\Jobs\EmailBlast;

class EmailSenderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendATestEmailOnQueue()
    {
        EmailBlast::dispatch();
        $user = \App\User::find(1);
        // Mail::to('cliffordacion@gmail.com')->send(new TestEmailOnQueue($user));

        return (new TestEmailOnQueue($user))->render();
    }
}
