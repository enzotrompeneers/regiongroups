<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class ReviewController extends Controller
{
    public function store(Portfolio $portfolio)
    {
        $this->validate(request(), [
            'rating' => 'required|max:1',
            'body' => 'required|min:2',
        ]);

        $portfolio->addReview(request('rating'), request('body'));

        return back();
    }
}
