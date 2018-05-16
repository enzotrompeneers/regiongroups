<?php

namespace App;

class Portfolio extends Model
{
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getAll()
    {
        return static::latest()->get();
    }

    public function addReview(array $requests)
    {
        $rating = $requests['rating'];
        $body = $requests['body'];
        $user_id = auth()->id();

        $this->reviews()->create(compact('rating', 'body', 'user_id'));
    }
}
