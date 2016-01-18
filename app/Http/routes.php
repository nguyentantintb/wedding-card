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
	return view('welcome');
});

//Redirect to List category when type /admin
Route::get('admin', function (){
	return Redirect('admin/category');
});

Route::group(['prefix' => 'admin'], function () {
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');
	Route::resource('user', 'UserController');
	Route::resource('photo', 'PhotoController');
	Route::get('gallery', function () {
		return view('admin.gallery.gallery');
	});
	Route::get('calendar', function () {
		return view('admin.calendar.calendar');
	});
});

Route::get('fakerUser', function () {
	$faker = Faker\Factory::create();
	for ($i = 0; $i < 10; $i++) {
		$user = array(
			'name' => $faker->name,
			'email' => $faker->email,
			'password' => \Hash::make('123456'),
			'remember_token' => str_random(10),
		);
		App\User::create($user);
	}
});

Route::get('fakerCategory', function () {
	$faker = Faker\Factory::create();
	for ($i = 0; $i < 6; $i++) {
		$cate = array(
			'name' => $faker->word,
		);
		App\Category::create($cate);
	}
});

Route::get('fakerProduct', function () {
	$faker = Faker\Factory::create();
	for ($i = 0; $i < 6; $i++) {
		$product = array(
			'name' => $faker->word,
			'price' => 12000,
			'description' => $faker->sentence(5),
			'category_id' => rand(1, 6),
		);
		App\Product::create($product);
	}
});