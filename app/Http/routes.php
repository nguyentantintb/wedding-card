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

Route::get('/', function () {
	return view('pages.home');
});

Route::get('contact', 'PagesController@getContact');
Route::post('send-contact', 'PagesController@sendContact');

Route::get('shopping-cart', 'PagesController@getCart');

//Redirect to List category when type /admin
Route::get('admin', function () {
	return Redirect('admin/category');
});

Route::group(['prefix' => 'admin'], function () {
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');

	Route::resource('user', 'UserController');
	Route::resource('photo', 'PhotoController');
	Route::post('gallery', function () {
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
