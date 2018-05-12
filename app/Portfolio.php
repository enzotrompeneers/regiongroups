<?php

namespace App;

class Portfolio extends Model
{
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public static function getAll()
    {
        return static::latest()->get();
    }

    public function addReview($rating, $body)
    {
        $this->reviews()->create(compact('rating', 'body'));
    }
}
