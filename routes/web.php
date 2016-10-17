<?php

Route::get('/', 'WelcomeController@index');
Route::get('about', 'PagesController@about');
Route::get('contacts', 'PagesController@contacts');

Route::resource('articles', 'ArticlesController');

Route::group(['prefix' => 'admin'], function () {

    Auth::routes();
    Route::get('/', 'Admin\AdminController@index');

    Route::get('dashboard', 'Admin\DashboardController@index');

    Route::group(['prefix' => 'catalog'], function () {

        Route::get('/', function() {
          return redirect()->action('Admin\Catalog\ProductsController@index');
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
        Route::get('manufacturers/{id}/edit', 'Admin\Catalog\ManufacturersController@edit');
        Route::post('manufacturers', 'Admin\Catalog\ManufacturersController@store');
    });
});
