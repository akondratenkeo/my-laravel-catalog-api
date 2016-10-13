<?php

Route::get('/', 'WelcomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contacts', 'PagesController@contacts');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', 'Admin\DashboardController@index');

    Route::group(['prefix' => 'catalog'], function () {

      Route::get('/', function() {
          return 'Test';
      });

      Route::get('products', 'Admin\Catalog\ProductsController@index');
      Route::get('products/create', 'Admin\Catalog\ProductsController@create');
      Route::get('products/{id}', 'Admin\Catalog\ProductsController@show');
      Route::post('products', 'Admin\Catalog\ProductsController@store');

      Route::get('categories', 'Admin\Catalog\CategoriesController@index');
      Route::get('categories/create', 'Admin\Catalog\CategoriesController@create');
      Route::get('categories/{id}', 'Admin\Catalog\CategoriesController@show');
      Route::post('categories', 'Admin\Catalog\CategoriesController@store');

      Route::get('manufacturers', 'Admin\Catalog\ManufacturersController@index');
      Route::get('manufacturers/create', 'Admin\Catalog\ManufacturersController@create');
      Route::get('manufacturers/{id}', 'Admin\Catalog\ManufacturersController@show');
      Route::post('manufacturers', 'Admin\Catalog\ManufacturersController@store');
    });
});
