<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Appointment;
use Carbon\Carbon;
class SendDailyAppointmentEmail extends Command
{
    protected $signature = 'ln:daily';

    protected $description = 'Send the daily email for appointment';

   public function __construct()
    {
        parent::__construct();
    }

     public function handle()
    {
        $today = Carbon::now();

        $today_appointments = Appointment::where('reminder',0)->where('payment_status','success')->where('appointment_date', Carbon::parse($today)->format('Y-m-d'))->get();

        foreach ($today_appointments as $key => $today_appointment) {
          $today_appointment->reminder = 1;
          $today_appointment->save();
          return $this->sendMail($today_appointment);
        }
    }


    public function sendMail($appointment)
    {
        $appointment_date = Carbon::parse($appointment->appointment_date)->format('D-M-Y');
        $today = Carbon::now();
        $formated_date = $today->format('Y-m-d');
        $fromMail = 'mrd@lisiehospital.org';

        $tos = 'rajeesh@meridian.net.in';

        //$tos = 'shabeebdothayi@gmail.com';

        //$tos = 'mrd@lisiehospital.org';

        $toName = $appointment->name;

        $fromName = "Lisie hospital - Book an appoinment";

        $toMail = $appointment->email;

        $subject = "Lisie Hospitals : Appointment Reminder";

        $bodyuser ='';

        $bodyuser .= '<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">




    <table border="0" cellpadding="0" cellspacing="0" width="100%">



    <!-- LOGO -->



    <tr>



    <td align="center">



    <!--[if (gte mso 9)|(IE)]>



    <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">



    <tr>



    <td align="center" valign="top" width="600">



    <![endif]-->



    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">



    <tr>



    <td align="left" valign="top" style="padding: 40px 10px 40px 10px;">



    <a href="https://www.lisiehospital.org/" target="_blank" style="text-decoration: none;">



    <img src="https://www.lisiehospital.org/assets/front/images/lisie-hospital-logo.png">



    </a>



    </td>



    <td align="right" valign="middle" style="padding: 40px 10px 40px 10px;">



    <p style="margin: 0;font-family: Poppins, sans-serif;">



    <a href="" target="_blank" style="color: #3b5998; font-weight: 700; text-decoration: none;">Facebook</a> -



    <a href="" target="_blank" style="color: #1da1f2; font-weight: 700; text-decoration: none;">Twitter</a> -



    <a href="" target="_blank" style="color: #fd2725; font-weight: 700; text-decoration: none;">YouTube</a>



    </p>



    </td>



    </tr>



    </table>



    <!--[if (gte mso 9)|(IE)]>



    </td>



    </tr>



    </table>







    <![endif]-->



    </td>



    </tr>



    <!-- HERO -->



    <tr>



    <td align="center" style="padding: 0px 10px 0px 10px;">



    <!--[if (gte mso 9)|(IE)]>



    <table align="center" border="0" cellspacing="0" cellpadding="0" width="635">



    <tr>



    <td align="center" valign="top" width="635">



    <![endif]-->



    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">



    <tr>



    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family:Poppins, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">



    <h1 style="font-size: 36px; font-weight: 600; margin: 0;">Hi ' . $appointment->name . '</h1>



    </td>



    </tr>



    </table>



    <!--[if (gte mso 9)|(IE)]>



    </td>



    </tr>



    </table>



    <![endif]-->



    </td>



    </tr>



    <!-- COPY BLOCK -->



    <tr>



    <td align="center" style="padding: 0px 10px 0px 10px;">



    <!--[if (gte mso 9)|(IE)]>



    <table align="center" border="0" cellspacing="0" cellpadding="0" width="635">



    <tr>



    <td align="center" valign="top" width="635">



    <![endif]-->



    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">



    <!-- COPY -->



    <tr>



    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">



    <p style="margin: 0;">This is a reminder for your appointment.</p> 

    <p style="margin: 0;">Appointment Date : ' . Carbon::parse($appointment->appointment_date)->format('D-M-Y') . '</p>';

    if(isset($appointment->token)){

        $bodyuser .= '<p style="margin: 0;">Token Number : ' . $appointment->token->token . '</p>

                      <p style="margin: 0;">Appointment Time : ' . $appointment->token->time . '</p>';
    }

    if(isset($appointment->doctor)){

        $bodyuser .= '<p style="margin: 0;">Doctor : ' . $appointment->doctor->doctor_name . '</p>';
    }

    if(isset($appointment->department)){

        $bodyuser .= '<p style="margin: 0;">Department : ' . $appointment->department->department_name . '</p>';

    }

    if(isset($appointment->checkup)){
        $bodyuser .= '<p style="margin: 0;">Checkup For : ' . $appointment->checkup->name . '</p>';

    }

    // if(isset($appointment->amount)){

    //     $bodyuser .= '<p style="margin: 0;">Amount : ' . $appointment->amount . '</p>';
    // }
    // if(isset($appointment->txnId)){

    //     $bodyuser .= '<p style="margin: 0;">Transaction ID  : ' . $appointment->txnId . '</p>';

    // }

    // if(isset($appointment->txn_status)){

    //     $bodyuser .= '<p style="margin: 0;">Transaction status : ' . $appointment->txn_status . '</p>';

    // }

    // if(isset($appointment->bank)){

    //     $bodyuser .= '<p style="margin: 0;">Bank : ' . $appointment->bank . '</p>';

    // }


    $bodyuser .= '</td>
    </tr>
    <!-- BULLETPROOF BUTTON -->
    <tr>
    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
    <p style="margin: 0;">For all your queries contact <a href="tel:0484 – 2402044" target="_blank" style="color: #194ea5;">0484 – 2402044</a>.</p>
    </td>
    </tr>
    <!-- COPY -->
    <!-- COPY -->
    <tr>
    <td bgcolor="#ffffff" align="left" style="padding: 0px 5px 10px 5px; border-radius: 0px 0px 0px 0px; color: #666666; font-family: Poppins, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
    <p style="margin: 0;">&nbsp;</p>
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
    </tr>
    <!-- SUPPORT CALLOUT -->
    <tr>
    <td align="center" style="padding: 10px 10px 0px 10px;">
    <!--[if (gte mso 9)|(IE)]>
    <table align="center" border="0" cellspacing="0" cellpadding="0" width="635">
    <tr>
    <td align="center" valign="top" width="635">
    <![endif]-->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">
    <!-- HEADLINE -->
    <tr>
    <td bgcolor="#fe1b5f" align="center" style="padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #fff; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 25px;">
    <p style="margin: 0;">You could also write to us at <a href="mailto:contact@lisiehospital.org" target="_blank" style="color: #fff;">contact@lisiehospital.org</a></p>
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
    </tr>
    <!-- FOOTER -->
    <tr>
    <td align="center" style="padding: 10px 10px 50px 10px;">
    <!--[if (gte mso 9)|(IE)]>
    <table align="center" border="0" cellspacing="0" cellpadding="0" width="635">
    <tr>
    <td align="center" valign="top" width="635">
    <![endif]-->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 640px;">
    <!-- COPYRIGHT -->
    <tr>
    <td align="center" style="padding: 30px 30px 30px 30px; color: #333333; font-family: Poppins, sans-serif; font-size: 15px; font-weight: 400; line-height: 18px;">
    <p style="margin: 0;">© ' . $formated_date . '  <sup></sup> Lisie Hospital,Kochi, Kerala - 682017 </p>
    </td>
    </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </td>
    </tr>
    </table>
    </body>';


    $url = 'https://api.sendgrid.com/';

    
    // $user = 'meridianit';

    // $pass = 'Meridian786';

    $user = 'swaroopcg';

    $pass = 'Meridian786@#';

    $json_string = array(


        //
        'to' => array(

           $toMail,
        ),

        'category' => 'test_category',

    );


    $params = array(

        'api_user' => $user,

        'api_key' => $pass,

        'x-smtpapi' => json_encode($json_string),

        'to' => $toMail,

        'subject' => ''.$subject.' :: Lisie Hospital',

        'html' => $bodyuser,

        'text' => ''.$subject.' :: Lisie Hospital',

        'from' => $fromName . '<mrd@lisiehospital.org>',

    );

    $request1 = $url . 'api/mail.send.json';

    // Generate curl request

    $session = curl_init($request1);

    // Tell curl to use HTTP POST

    curl_setopt($session, CURLOPT_POST, true);

    // Tell curl that this is the body of the POST

    curl_setopt($session, CURLOPT_POSTFIELDS, $params);

    // Tell curl not to return headers, but do return the response

    curl_setopt($session, CURLOPT_HEADER, false);

    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($session);

    curl_close($session);

    $mailmsg = $response;

    }


}
