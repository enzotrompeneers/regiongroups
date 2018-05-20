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
        return static::latest();
    }

    public function scopeFilterCity($query, $city)
    {
        return $query->where('city', $city);
    }

    public static function groupCities()
    {
        return static::selectRaw('city name,count(*) amount')
        ->groupBy('city')
        ->orderByRaw('min(created_at) desc')
        ->get();
    }

    public function addReview(array $requests)
    {
        $rating = $requests['rating'];
        $body = $requests['body'];
        $user_id = auth()->id();

        $this->reviews()->create(compact('rating', 'body', 'user_id'));
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
