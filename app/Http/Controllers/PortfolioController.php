<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Http\Requests\PortfolioCreateRequest;
use App\Http\Requests\PortfolioUpdateRequest;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function __construct()
    {
        // need to be logged in except for index and show
        $this->middleware('auth')->except(['index', 'show']);
        \Carbon\Carbon::setLocale('nl');
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
        ->paginate(10);

        return view('portfolios.index', compact('portfolios', 'search', 'city', 'city_name'));
    }

    public function create()
    {
        session()->flash('success', '');
        session()->flash('warning', '');
        session()->flash('info', '');
        return view('portfolios.create');
    }

    public function store(PortfolioCreateRequest $requests, Portfolio $portfolio)
    {
        // add portfolio
        $slug = $portfolio->addPortfolio($portfolio, $requests);
        session()->flash('success', 'Opgeslagen!');

        return redirect()->route('portfolio.show', $slug);
    }

    public function show(Portfolio $portfolio)
    {
        session()->flash('success', '');
        session()->flash('warning', '');
        session()->flash('info', '');

        return view('portfolios.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(PortfolioUpdateRequest $requests, Portfolio $portfolio)
    {
        $portfolio->updatePortfolio($portfolio, $requests);
        session()->flash('success', 'Gewijzigd!');

        return redirect()->route('portfolio.show', $portfolio);
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        Storage::delete($portfolio->logo);
        session()->flash('success', 'Verwijderd!');

        return redirect()->home();
    }
}
