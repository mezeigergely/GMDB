<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'MovieController@index');

Route::get('/movie_people', 'MoviePersonController@index');

Route::get('/movie_people/create', 'MoviePersonController@create');

Route::post('/movie_people/create', 'MoviePersonController@store');

Route::get('/movie_people/{movie_person}', 'MoviePersonController@show');

