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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('Customers', 'CustomersController');

Route::get('Restaurant', 'RestaurantConrtoller');

Route::get('Dishes', 'DishesController');

Route::get('/home', 'HomeController@index')->name('home');
