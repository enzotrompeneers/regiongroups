<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function countReviews()
    {
        return count(Review::where('user_id', Auth::user()->id)->get());
    }
}
