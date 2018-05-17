<?php

namespace App\Http\Controllers;

use App\Portfolio;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        // get all the portfolios
        $portfolios = Portfolio::getAll()->get();

        // group portfolios by city
        $cities = Portfolio::groupCities();

        return view('home.index', compact('portfolios', 'cities'));
    }
}
