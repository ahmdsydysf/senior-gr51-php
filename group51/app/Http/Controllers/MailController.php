<?php

namespace App\Http\Controllers;

use App\Mail\myEmailMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $details = [

            'title' => 'Mail from ItSolutionStuff.com',

            'body' => 'This is for testing email using smtp'

        ];
        Mail::to(Auth::user()->email)->send(new myEmailMailer($details));
    }
}
