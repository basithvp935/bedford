<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplicationMail extends Mailable
{
    use Queueable, SerializesModels;
    public $datas;

    public function __construct($datas)
    {
        $this->datas = $datas;

    }

    public function build()
    {
         return $this->subject('Armela Farms :: Career Application Received  From - '.$this->datas['name'])
                ->from(env('MAIL_USERNAME'),'Armela Farms')
                ->view('front.emails.career_mail_to_admin');
    }
}
