<?php

Route::get('/', 'HomeController@index');

//Route::resource('portfolios', 'PortfolioController');
Route::get('portfolios', 'PortfolioController@index');
Route::get('portfolios/nieuw', 'PortfolioController@create');
Route::post('portfolios', 'PortfolioController@store');
Route::get('portfolios/{portfolio}', 'PortfolioController@show');

Route::post('portfolios/{portfolio}/reviews', 'ReviewController@store');

Route::get('zoeken', 'PortfolioController@index');

Route::get('registreren', function () {
    return view('partials.register');
});
