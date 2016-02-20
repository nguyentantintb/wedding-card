<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedProduct extends Model
{
    protected $table = 'featured_products';
    protected $fillable = ['rank', 'product_id'];
    public function product() {
		return $this->belongsTo('App\Product');
	}
    public $timestamps = false;

}
