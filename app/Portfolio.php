<?php

namespace App;

use Location;
use Illuminate\Http\Request;

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

    public function scopeSearch($query, $name, $city)
    {
        $original = clone $query;

        // search with location
        $query->where(function ($query) use ($name) {
            $query->where('name', 'like', '%' . $name . '%')
                  ->orWhere('description', 'like', '%' . $name . '%');
        })
        ->where(function ($query) use ($city) {
            $query->where('city', 'like', '%' . $city . '%');
        });

        // check if found minimum 1
        if ($amount = count($query->get())) {
            if ($amount > 1) {
                session()->flash('message', 'Er zijn ' . $amount . ' resultaten gevonden!');
            } else {
                session()->flash('message', 'Er is ' . $amount . ' resultaat gevonden!');
            }
            return $query;
        }

        // no search results were found
        // search again and filter without the location to wider the search result
        $original->where(function ($original) use ($name) {
            $original->where('name', 'like', '%' . $name . '%')
                  ->orWhere('description', 'like', '%' . $name . '%');
        });

        // check if found minimum 1
        if ($amount = count($original->get())) {
            if ($amount > 1) {
                session()->flash('message', 'Er zijn geen resultaten gevonden in deze gemeente! <br> Buiten de gemeente zijn er ' . $amount . ' resultaten gevonden!');
            } else {
                session()->flash('message', 'Er zijn geen resultaten gevonden in deze gemeente! <br> Buiten de gemeente is er ' . $amount . ' resultaat gevonden!');
            }
            return $original;
        }

        // no search results were found
        session()->flash('message', 'Er zijn geen resultaten gevonden!');
        return $original;
    }

    public static function groupCities()
    {
        return static::selectRaw('city name,count(*) amount')
        ->groupBy('city')
        ->orderByRaw('min(created_at) desc')
        ->get();
    }

    public static function getIp()
    {
        $ip = request()->ip();
        $ip = '81.82.128.212';

        return $ip;
    }

    public static function getLocation()
    {
        return Location::get(static::getIp());
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
