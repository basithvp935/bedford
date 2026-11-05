<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;
    public $datas;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datas)
    {
        $this->datas = $datas;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->subject('Green Mountain :: Enquiry Received - '.$this->datas['name'])
                ->from(env('MAIL_USERNAME'),'Green Mountain')
                ->view('front.emails.enquiry_mail_to_admin');
    }
}
