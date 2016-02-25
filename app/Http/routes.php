<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

// Route::get('/', function () {
// 	return view('pages.home');
// });

Route::get('contact', 'PagesController@getContact');
Route::get('/', 'PagesController@index');
Route::post('send-contact', 'PagesController@sendContact');
Route::get('category/{slug}', 'PagesController@ProductOfCate');
Route::get('product/{slug}',['as'=>'product','uses'=>'PagesController@ProductDetail']);
Route::get('shopping-cart', 'PagesController@ShoppingCart');
Route::get('buy-product/{id}/{slug}', 'PagesController@buyProduct');
Route::get('romove-product/{id}',['as'=>'removeitem','uses'=>'PagesController@removeItem']);
Route::get('update-cart/{id}',['as'=>'updatecart','uses'=>'PagesController@updateCart']);
Route::get('update-qty/{id}/{qty}',['as'=>'update-qty','uses'=>'PagesController@UpdateQty']);
Route::get('checkout',['as'=>'checkout','uses'=>'PagesController@OrderProduct']);

//Redirect to List category when type /admin
Route::get('admin', function () {
	return Redirect('admin/category');
});

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');

	Route::resource('user', 'UserController');
	Route::resource('featured-product', 'FeaturedProductController');
	Route::resource('photo', 'PhotoController');
	Route::get('gallery', function () {
		return view('admin.gallery.gallery');
	});
	Route::get('calendar', function () {
		return view('admin.calendar.calendar');
	});
});

Route::post('ajax/loadcategories', [
	'as' => 'loadcategories',
	'uses' => 'CategoryController@loadTable',
]);

Route::post('ajax/loadproducts', [
	'as' => 'loadproducts',
	'uses' => 'ProductController@loadTable',
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
// Route Controller Reset Password
Route::controllers([
	'password' => 'Auth\PasswordController',
]);
