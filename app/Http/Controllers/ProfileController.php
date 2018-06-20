<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Review;

class ProfileController extends Controller
{
    public function show()
    {
        $amount_reviews = Review::countReviews();

        $portfolios = Portfolio::getAll()
        ->userPortfolio()
        ->paginate(100);
        session()->flash('success', '');
        session()->flash('warning', '');
        session()->flash('info', '');

        return view('profile.show', compact('portfolios', 'amount_reviews'));
    }
}
