<?php

Route::get('/', 'PortfolioController@index')->name('home');

Auth::routes();

Route::post('betaling', 'PaymentController@store')->name('payment');

Route::get('gemeente/{city}', 'CityController@show')->name('city.show');

Route::get('gebruiker/{id}', 'ProfileController@show')->name('profile.show');

Route::get('zoeken', 'PortfolioController@index')->name('search');

Route::post('portfolios/{portfolio}/reviews', 'ReviewController@store')->name('review.store');

Route::get('portfolios', 'PortfolioController@index')->name('portfolio.index');
Route::get('portfolio/nieuw', 'PortfolioController@create')->name('portfolio.create');
Route::post('portfolio/nieuw', 'PortfolioController@store')->name('portfolio.store');
Route::get('{portfolio}/bewerken', 'PortfolioController@edit')->name('portfolio.edit');
Route::patch('{portfolio}/bewerken', 'PortfolioController@update')->name('portfolio.update');
Route::delete('{portfolio}/verwijderen', 'PortfolioController@destroy')->name('portfolio.destroy');
Route::get('{portfolio}', 'PortfolioController@show')->name('portfolio.show');
