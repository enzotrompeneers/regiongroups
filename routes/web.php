<?php

Route::get('/', 'PortfolioController@index')->name('home');

Auth::routes();

Route::get('portfolios', 'PortfolioController@index')->name('portfolio.index');
Route::get('portfolios/nieuw', 'PortfolioController@create')->name('portfolio.create');
Route::post('portfolios/nieuw', 'PortfolioController@store')->name('portfolio.store');
Route::get('portfolios/bewerken/{portfolio}', 'PortfolioController@edit')->name('portfolio.edit');
Route::patch('portfolios/bewerken/{portfolio}', 'PortfolioController@update')->name('portfolio.update');

Route::get('portfolios/{portfolio}', 'PortfolioController@show')->name('portfolio.show');

Route::get('gemeente/{city}', 'CityController@show')->name('city.show');

Route::post('portfolios/{portfolio}/reviews', 'ReviewController@store')->name('review.store');

Route::get('zoeken', 'PortfolioController@index')->name('search');
