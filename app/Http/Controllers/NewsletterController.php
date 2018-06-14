<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $email = $request['email'];
        //$newsletter->create(compact('email'));
        return back();
    }
}
