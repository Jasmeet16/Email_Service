<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function create()
    {
        return view('entercredentials');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ];

        Mail::send('emails.testemail', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return view('emails.success', ['email' =>$data['email'] ]);
    }
}
