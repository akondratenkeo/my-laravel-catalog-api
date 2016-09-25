<?php

Route::get('/', 'WelcomeController@index');

Route::get('about', 'PagesController@about');

Route::get('contacts', 'PagesController@contacts');