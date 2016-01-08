<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
	protected $table = 'orders';
	protected $fillable = ['user_id', 'address', 'product_id', 'quantity', 'price'];
	public function user() {
		return $this->belongsTo('App\User');
	}
}
