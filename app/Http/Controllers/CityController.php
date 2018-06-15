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
        ->paginate(10);

        if ($amount = count($portfolios)) {
            session()->flash('warning', '');
            session()->flash('success', '');
            if ($amount > 1) {
                session()->flash('info', $amount . ' resultaten gevonden!');
            } else {
                session()->flash('info', $amount . ' resultaat gevonden!');
            }
        }

        return view('portfolios.index', compact('portfolios', 'city_name'));
    }
}
