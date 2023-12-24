<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $get_user_email;
    public $get_user_name;
    public $validToken;

    /**
     * Create a new message instance.
     */
    public function __construct($get_user_email,$validToken,$get_user_name)
    {
        $this->get_user_email = $get_user_email;
        $this->validToken = $validToken;
        $this->get_user_name = $get_user_name;

    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'OTP Send By Sahib.af Website ',
        );
    }

      /**
     * Get the message content definition.
     */
    // public function build()
    // {
    //     return $this->view('emails.welcome')->with([
    //         'user_email' => $this->get_user_email,
    //         'validToken' => $this->validToken,
    //         'user_name' => $this->get_user_name,
    //     ]);
    // }
    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.welcome',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
