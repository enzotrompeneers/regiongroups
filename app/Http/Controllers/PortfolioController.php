<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function __construct()
    {
        // need to be logged in except for index and show
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // get all the portfolios
        $portfolios = Portfolio::getAll()->get();

        // group portfolios by city
        $cities = Portfolio::groupCities();

        return view('home.index', compact('portfolios', 'cities'));
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate(request(), [
            //'logo' => 'string|max:255|image',
            'name' => 'required|string|max:255',
            'description' => 'required|min:10',
            'street' => 'required|string|max:255',
            'housenumber' => 'required|string|max:255',
            'postal_code' => 'required|string|min:4|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'external' => 'string|max:255|active_url',
        ]);

        // add review to the portfolio
        $requests = request(['logo', 'name', 'description', 'street', 'housenumber', 'postal_code', 'city', 'country', 'phone', 'email', 'external']);
        auth()->user()->addPortfolio($requests);

        // create and save portfolio
        //auth()->user()->publish();

        return redirect('/');
    }

    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
