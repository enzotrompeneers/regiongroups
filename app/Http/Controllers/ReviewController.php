<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class ReviewController extends Controller
{
    public function store(Portfolio $portfolio)
    {
        // validation
        $this->validate(request(), [
            'rating' => 'required|string|max:1',
            'body' => 'required|min:2',
        ]);

        // add review to the portfolio
        $requests = request(['rating', 'body']);
        $portfolio->addReview($requests);

        return back();
    }
}
