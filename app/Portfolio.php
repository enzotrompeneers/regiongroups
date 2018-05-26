<?php

namespace App;

use Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Portfolio extends Model
{
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
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
                session()->flash('info', 'Er zijn ' . $amount . ' resultaten gevonden!');
            } else {
                session()->flash('info', 'Er is ' . $amount . ' resultaat gevonden!');
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
                session()->flash('info', 'Er zijn geen resultaten gevonden in deze gemeente! <br> Buiten de gemeente zijn er ' . $amount . ' resultaten gevonden!');
            } else {
                session()->flash('info', 'Er zijn geen resultaten gevonden in deze gemeente! <br> Buiten de gemeente is er ' . $amount . ' resultaat gevonden!');
            }
            return $original;
        }

        // no search results were found
        session()->flash('info', 'Er zijn geen resultaten gevonden!');
        return $original;
    }

    public function scopeUserPortfolio($query)
    {
        return $query->where('user_id', '=', Auth::user()->id);
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

    public function addPortfolio($portfolio, $requests)
    {
        $logo = $requests['logo'];
        $name = $requests['name'];
        $description = $requests['description'];
        $street = $requests['street'];
        $housenumber = $requests['housenumber'];
        $postal_code = $requests['postal_code'];
        $city = $requests['city'];
        $country = $requests['country'];
        $phone = $requests['phone'];
        $email = $requests['email'];
        $external = $requests['external'];
        $layout = 1;
        $user_id = auth()->id();

        $portfolio->create(compact('logo', 'name', 'description', 'street', 'housenumber', 'postal_code', 'city', 'country', 'phone', 'email', 'external', 'layout', 'user_id'));
    }

    public function updatePortfolio($portfolio, $requests)
    {
        $portfolio->logo = $requests['logo'];
        $portfolio->name = $requests['name'];
        $portfolio->description = $requests['description'];
        $portfolio->street = $requests['street'];
        $portfolio->housenumber = $requests['housenumber'];
        $portfolio->postal_code = $requests['postal_code'];
        $portfolio->city = $requests['city'];
        $portfolio->country = $requests['country'];
        $portfolio->phone = $requests['phone'];
        $portfolio->email = $requests['email'];
        $portfolio->external = $requests['external'];
        $portfolio->layout = 1;
        $portfolio->user_id = auth()->id();

        $portfolio->save();
    }

    public function scopeFilterCity($query, $city)
    {
        return $query->where('city', $city);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
