<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $name;
    public $company;
    public $text;


    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        $this->email = $data['email'];
        $this->name = $data['first_name']." ".$data['last_name'];
        $this->company = $data['company'] ?? "";
        $this->text = $data['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->name)->subject('Contact Us message')->view('emails.contact');
    }
}
