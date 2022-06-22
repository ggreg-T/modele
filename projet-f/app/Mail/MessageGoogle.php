<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// #################################
// Version AKILI
// #################################

class MessageGoogle extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data; 

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("wilo.ahadi@gmail.com") // L'expéditeur
                    ->subject("Message via le SMTP Google") // Le sujet
                    ->view('emails.message-google'); // La vue
    }
}
