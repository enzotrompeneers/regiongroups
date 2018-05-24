<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Http\Requests\PortfolioRequest;

class PortfolioController extends Controller
{
    public function __construct()
    {
        // need to be logged in except for index and show
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        // get location
        $position = Portfolio::getLocation();
        $city_name = $position->cityName;

        // search inputs
        $search = $request->input('search');
        $city = $request->input('city');

        // get all the portfolios
        $portfolios = Portfolio::getAll()
        ->search($search, $city)
        ->get();

        return view('home.index', compact('portfolios', 'search', 'city', 'city_name'));
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(PortfolioRequest $requests, Portfolio $portfolio)
    {
        // add portfolio
        $portfolio->addPortfolio($portfolio, $requests);
        session()->flash('crud', 'Portfolio is opgeslagen!');

        return redirect()->route('portfolio.show', $portfolio);
    }

    public function show(Portfolio $portfolio)
    {
        session()->flash('info', '');
        return view('portfolios.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(PortfolioRequest $requests, Portfolio $portfolio)
    {
        // update the portfolio
        $portfolio->updatePortfolio($portfolio, $requests);
        session()->flash('crud', 'Portfolio is gewijzigd');

        return redirect()->route('portfolio.show', $portfolio);
    }

    public function destroy($id)
    {
    }
}
