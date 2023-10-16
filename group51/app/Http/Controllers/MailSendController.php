<?php

namespace App\Http\Controllers;

use App\Mail\SendMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
    public function index()
    {
        $details = [
            'title' => 'TeamLeader Vacancy',
            'body' => 'this is requirements for the vacancy 1 , 2, 3'
        ];

        Mail::to('gdfgdfgdg@gmail.com')->send(new SendMailer($details));
    }
}
