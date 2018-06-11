<?php

namespace App\Http\Controllers;

use App\Portfolio;

class ProfileController extends Controller
{
    public function show()
    {
        $portfolios = Portfolio::getAll()
        ->userPortfolio()
        ->get();
        session()->flash('info', '');

        return view('profile.show', compact('portfolios'));
    }
}
