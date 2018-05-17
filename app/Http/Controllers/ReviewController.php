<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Http\Requests\ReviewRequest;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(ReviewRequest $requests, Portfolio $portfolio)
    {
        // add review to the portfolio
        $portfolio->addReview($requests->toArray());

        return back();
    }
}
