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

Route::resource('products', 'ProductsController', ['only' => ['index', 'show']]);

Route::resource('brands', 'BrandsController', ['only' => 'index']);

Route::get('contactus', 'ContactUsController@index')->name('contact_us');

Route::resource('about', 'AboutController', ['only' => 'index']);

Route::resource('subscriptions', 'SubscriptionsController', ['only' => ['index', 'store']]);

Route::get('inquires/create', 'InquiriesController@create')->name('inquires.create');
Route::post('inquires', 'InquiriesController@store')->name('inquires.store');