<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function contact()
    {
        return view('contact-us');
    }
public function contactSubmit(Request $request){
    Mail::send('emails.contactmail',[
        'name' =>$request->name,
        'email' =>$request->email,
        'phone' =>$request->phone,
        'msg' =>$request->msg
    ],
    function($mail) use($request)
    {
        // $mail->from(env('MAIL_FROM_ADRESS'),$request->name);
        $mail->from('greg@mail.com',$request->name);

        $mail->to("kenduradd@gmail.com")->subject('Contact Us Message');
    }
);
return "Le formulaire à bien été envoyé. Super!!";
}
}
