<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Photo;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		Model::unguard();

		// $this->call('PhotoSeeder');

		//$this->call(ProductSeeder::class);
		factory(App\User::class, 50)->create();
		factory(App\Category::class, 10)->create();
		factory(App\Product::class, 50)->create();

		DB::table('featured_products')->insert(
			[
				['rank' => '1', 'product_id' => '1'],
				['rank' => '2', 'product_id' => '2'],
				['rank' => '3', 'product_id' => '3'],
				['rank' => '4', 'product_id' => '4'],
				
			]
		);

		for($i=1; $i<51; $i++){
        	$photo = new Photo();
        	$photo->title = "default.jpg";
        	$photo->product_id = $i;
        	$photo->save();
        }



		Model::reguard();
	}
}
