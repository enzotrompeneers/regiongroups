<?php

Route::get('/', 'PortfolioController@index')->name('home');

Auth::routes();

Route::post('betaling', 'PaymentController@store')->name('payment');

Route::post('nieuwsbrief/aanvraag', 'NewsletterController@store')->name('newsletter');

Route::get('gemeente/{city}', 'CityController@show')->name('city.show');

Route::get('gebruiker/{id}', 'ProfileController@show')->name('profile.show');

Route::get('over-ons', 'AboutController@index')->name('about');

Route::get('contacteren', 'ContactController@index')->name('contact');

Route::get('contact/portfolio/{email}', 'ContactController@portfolio')->name('contact.portfolio');

Route::post('portfolios/{portfolio}/reviews', 'ReviewController@store')->name('review.store');

Route::get('portfolios', 'PortfolioController@index')->name('portfolio.index');
Route::get('portfolio/nieuw', 'PortfolioController@create')->name('portfolio.create');
Route::post('portfolio/nieuw', 'PortfolioController@store')->name('portfolio.store');
Route::get('{portfolio}/bewerken', 'PortfolioController@edit')->name('portfolio.edit');
Route::patch('{portfolio}/bewerken', 'PortfolioController@update')->name('portfolio.update');
Route::delete('{portfolio}/verwijderen', 'PortfolioController@destroy')->name('portfolio.destroy');
Route::get('{portfolio}', 'PortfolioController@show')->name('portfolio.show');
