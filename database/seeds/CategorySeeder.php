<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 1; $i < 10; $i++) {
	       $cate = new Category;
	       $cate->name = "Thiệp loại $i";
	       $cate->save();
      };
    }
}
