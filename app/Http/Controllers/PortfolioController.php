<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::getAll();
        return view('portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        portfolio::create(request([
            'name',
            'description',
            'street',
            'housenumber',
            'postal_code',
            'city',
            'country',
            'phone',
            'email',
            'external',
            'subscription',
            'layout'
        ]));

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
