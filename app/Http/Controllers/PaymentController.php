<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;

class PaymentController extends Controller
{
    public function store()
    {
        //Stripe::setApiKey(config('services.stripe.secret'));

        $customer = Customer::create([
            'email' => request('stripeEmail'),
            'source' => request('stripeToken')
        ]);

        Charge::create([
            'customer' => $customer->id,
            'amount' => 4999,
            'currency' => 'eur'
        ]);

        return 'all done';
    }
}
