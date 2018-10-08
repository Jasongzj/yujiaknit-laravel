<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('root');

Route::resource('news', 'NewsController', ['only' => 'index', 'show']);

Route::resource('products', 'ProductsController', ['only' => 'index', 'show']);

Route::resource('brands', 'BrandsController', ['only' => 'index']);

Route::get('contactus', 'ContactUsController@index')->name('contact_us');
