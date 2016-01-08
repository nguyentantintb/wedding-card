<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('photos', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('image');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('photos');
	}
}
