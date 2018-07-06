<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmailOnQueue extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $emailYahoo = "testemail@example.com";
        return $this->from($emailYahoo)
                    ->view('mails.name')
                    ->with([
                        'username' => $this->user->name,
                        'email' => $this->user->email,
                        'timestamp' => date("Y-m-d h:i:s A")
                    ]);
    }
}
