<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Mail from Laravel 10',
            'body' => 'This is for testing email using smtp',
        ];

        Mail::to('mahmudulalam286@gmail.com')->send(new DemoMail($mailData));
        dd('Email send succesfully');
    }
}
