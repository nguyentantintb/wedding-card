<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\User::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->email,
		'password' => \Hash::make('123456'),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->sentence(3),
	];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->word,
		'price' => 12000,
		'description' => $faker->sentence(5),
		'category_id' => rand(1, 6),
	];
});
