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
        $portfolios = Portfolio::getAll();
        return view('home.index', compact('portfolios'));
    }
}
