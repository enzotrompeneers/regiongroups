<?php

namespace App\Http\Controllers;

use App\Portfolio;

class ProfileController extends Controller
{
    public function show()
    {
        $portfolios = Portfolio::getAll()
        ->userPortfolio()
        ->paginate(10);
        session()->flash('success', '');
        session()->flash('warning', '');
        session()->flash('info', '');
        return view('profile.show', compact('portfolios'));
    }
}
