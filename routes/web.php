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

Route::get('/', 'RestaurantController@index');

Route::get('docs', function () {
    return view('general.docs');
});

Auth::routes();

Route::resource('customer', 'CustomerController');
Route::resource('restaurant', 'RestaurantController');
Route::resource('dishes', 'DishesController');
Route::resource('order', 'OrderController');

Route::get('/restaurant-dashboard/{id}', 'RestaurantUserController@dashboard');
Route::get('/ourDishes/{id}', 'RestaurantUserController@ourDishes');
Route::get('/dashboard/{id}', 'RestaurantUserController@dashboard');

Route::get('/cart', 'CartController@cart');
Route::get('/addToCart/{id}', 'CartController@addToCart');
Route::get('/purchaseCart/{total}', 'CartController@purchaseCart');
Route::delete('/removeFromCart/{id}', 'CartController@removeFromCart');

Route::get('/applications', 'AdminController@applications');
Route::get('/approve/{id}', 'AdminController@approve');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'RestaurantController@index')->name('home');
