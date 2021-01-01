<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{

    public function enterDetails(){
        return view('entercredentials');
    }

    public function putPermanentEnv($key, $value){
        $path = app()->environmentFilePath();

        $escaped = preg_quote('='.env($key), '/');

        file_put_contents($path, preg_replace(
            "/^{$key}{$escaped}/m",
            "{$key}={$value}",
            file_get_contents($path)
        ));

    }

    public function store(){

        $email = request('email');
        $password = request('password');
        $key = 'MAIL_USERNAME';

        //updating .env 
        SendMailController::putPermanentEnv($key ,$email);

        $passkey = 'MAIL_PASSWORD';

        SendMailController::putPermanentEnv($passkey ,$password);

        return redirect('/sendemail');
       
    }

   

    public function sendEmail(){
        $data =[
            'name' => "Jasmeet",
            'message' => 'Hello',
        ];

        Mail::to('singhjasmeet1916@gmail.com')->send(new SendMail($data));
        return 'mailSent';
    }
}
