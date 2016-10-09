<?php

Route::get('/', 'WelcomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contacts', 'PagesController@contacts');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');

Route::group(['prefix' => 'admin'], function () {
    Route::get('products', 'Admin\Products\ProductsController@index');
    Route::get('products/create', 'Admin\Products\ProductsController@create');
    Route::get('products/{id}', 'Admin\Products\ProductsController@show');
    Route::post('products', 'Admin\Products\ProductsController@store');
});