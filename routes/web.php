<?php

Route::get('/', 'HomeController@index');

Route::resource('portfolio', 'PortfolioController');
Route::get('zoeken', 'PortfolioController@index');

Route::get('registreren', function () {
    return view('partials.register');
});
