<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Lead;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    //make lead a public property available in view
    public $lead;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cyborgk@gmail.com')
            ->subject('Hypersonata | Contact Form: '.$this->lead->name)
            ->view('emails.contact');
    }
}
