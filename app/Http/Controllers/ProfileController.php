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

        return view('profile.show', compact('portfolios'));
    }
}
