<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Model::unguard();

		//$this->call(CategorySeeder::class);

		//$this->call(ProductSeeder::class);
		factory(App\User::class, 50)->create();
		factory(App\Category::class, 10)->create();
		factory(App\Product::class, 50)->create();

		Model::reguard();
	}
}
