<?php

namespace App;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model implements SluggableInterface {
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'title',
		'save_to' => 'slug',
	];
	protected $table = 'photos';
	protected $fillable = ['title', 'slug', 'image', 'product_id'];
	public function product() {
		return $this->belongsTo('App\Product');
	}
}
