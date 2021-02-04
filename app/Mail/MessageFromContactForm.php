<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageFromContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Email From Dinovert Website contact form';
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this->markdown('contact_form')
            ->with('content', $this->content);
    }
}
