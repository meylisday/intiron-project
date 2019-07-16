<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone;
    public $body;
    public $document;

    /**
     * Create a new message instance.
     *
     */
    public function __construct($name, $email, $phone, $body, $document)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->body = $body;
        $this->document = $document;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email')->subject('Order');
    }
}
