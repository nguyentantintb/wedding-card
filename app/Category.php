<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements SluggableInterface {

	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'name',
		'save_to' => 'slug',
	];

	protected $table = 'categories';

	protected $fillable = ['name', 'slug'];

	public function products() {
		return $this->hasMany('App\Product');
	}
}
