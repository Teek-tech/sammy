<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    protected $admin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Us Form.')->view('email.contact')->with(['admin' => $this->admin]);
    }
}
