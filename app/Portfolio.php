<?php

namespace App;

class Portfolio extends Model
{
    public function Ratings()
    {
        //return $this->hasMany('Rating', 'rating_id');
        return $this->hasMany(Rating::class);
    }

    public static function getAll()
    {
        return static::latest()->get();
    }
}
