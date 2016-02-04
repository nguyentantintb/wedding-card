<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements SluggableInterface {
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'name',
		'save_to' => 'slug',
	];
	protected $table = 'products';
	protected $fillable = ['name', 'slug', 'price', 'description', 'category_id'];
	public function category() {
		return $this->belongsTo('App\Category');
	}
	public function photos() {
		return $this->hasMany('App\Photo');
	}
}
