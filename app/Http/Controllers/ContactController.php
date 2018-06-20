<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactPortfolio;
use Illuminate\Http\Request;
use App\Portfolio;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function portfolio(Request $requests, $email)
    {
        $email_to = $email;
        $email_sender = $requests['email'];
        $email_subject = $requests['subject'];
        $email_message = $requests['message'];

        Mail::to($email)->send(new ContactPortfolio($email_sender, $email_subject, $email_message));

        session()->flash('success', 'Mail verstuurd!');

        return redirect()->back();
    }
}
