<?php

Route::get('/', 'WelcomeController@index');

Route::get('about', 'PagesController@about');

Route::get('contacts', 'PagesController@contacts');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');