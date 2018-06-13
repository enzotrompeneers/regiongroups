<?php

namespace App\Http\Controllers;

use App\Portfolio;

class CityController extends Controller
{
    public function show($city)
    {
        // get location
        $position = Portfolio::getLocation();
        $city_name = $position->cityName;

        // get all portfolios filtered by city
        $portfolios = Portfolio::getAll()
        ->filterCity($city)
        ->get();
        session()->flash('info', '');

        return view('portfolios.index', compact('portfolios', 'city_name'));
    }
}
