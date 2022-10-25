<?php

Route::get('/', 'HomeController@index')->name('index');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('compare-list', 'HomeController@compare')->name('compare.index');
Route::get('compare-add/{id}', 'HomeController@add_compare')->name('compare.add');
Route::get('compare-clear-all', 'HomeController@clear_compare')->name('compare.clear');

Route::get('/faq', 'FaqController@show')->name('faq');

Route::get('/about/{slug}', 'AboutController@show')->name('about.show');

Route::get('/contact-us', 'ContactController@show')->name('contact');
Route::get('/consulting', 'ContactController@show1')->name('consulting');
Route::post('/contact-post', 'ContactController@store')->name('contact.post');
Route::post('/consulting-post', 'ContactController@store1')->name('consulting.post');
Route::post('/exchange-post', 'ContactController@exchange_store')->name('exchange.post');

Route::get('projects', 'ProjectController@index')->name('project.index');
Route::get('projects-filter', 'ProjectController@filter')->name('project.filter');
Route::get('project/{id}/{slug}', 'ProjectController@show')->name('project.show');


Route::get('fav-list', 'FavController@index')->name('fav.index');
Route::get('fav-add/{id}', 'FavController@add_fav')->name('fav.add');
Route::get('fav-del/{id}', 'FavController@del_fav')->name('fav.del');

Route::get('/villas/{id?}', 'VillaController@index')->name('villa.index');
Route::get('/villa/{id}', 'VillaController@show')->name('villa.show');
Route::get('/villas-search/{type}', 'VillaController@search')->name('villas.search');

Route::get('/blogs/{slug?}', 'BlogController@index')->name('blog.index');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');

Route::get('/services/{slug?}', 'ServiceController@index')->name('service.index');

Route::get('/events/{slug?}', 'eventController@index')->name('events.index');
Route::get('/event/{slug}', 'eventController@show')->name('event.show');

Route::get('/category/{slug?}', 'BlogController@category')->name('category.index');
Route::get('/franchise', 'FranchiseController@index')->name('franchise.index');
Route::get('/franchise/{slug}', 'FranchiseController@Show')->name('franchise.show');

Route::get('/estate', 'EstateController@index')->name('estate.index');
Route::get('/estate/{slug}', 'EstateController@Show')->name('estate.show');
Route::get('/estate-search', 'EstateController@search')->name('estate.search');

Route::get('/forms/Tourist-accommodation', 'FormsController@TouristAccommodation')->name('TouristAccommodation.index');
Route::get('/forms/School', 'FormsController@School')->name('School.index');

Route::get('/Export', 'ExportController@index')->name('Export.index');
Route::get('/Export/{slug}', 'ExportController@Show')->name('Export.show');

Route::get('/exchange', 'ExchangeController@index')->name('exchange.index');

Route::get('/educational', 'educationalController@index')->name('educational.index');
Route::get('/educational/{slug}', 'educationalController@Show')->name('educational.show');

Route::get('/Legal', 'LegalController@index')->name('Legal.index');
Route::get('/Legal/{slug}', 'LegalController@Show')->name('Legal.show');
