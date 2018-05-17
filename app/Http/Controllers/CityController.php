<?php

namespace App\Http\Controllers;

use App\Portfolio;

class CityController extends Controller
{
    public function show($city)
    {
        // get all portfolios filtered by city
        $portfolios = Portfolio::getAll()
        ->filterCity($city)
        ->get();

        // group portfolios by city
        $cities = Portfolio::groupCities();

        return view('home.index', compact('portfolios', 'cities'));
    }
}
