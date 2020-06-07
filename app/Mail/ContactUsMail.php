<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_info_detail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_info_detail)
    {
        $this->contact_info_detail = $contact_info_detail;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('site.email.contact-us-mail');
        return $this->markdown('site.emails.contact-mail');

    }
}
