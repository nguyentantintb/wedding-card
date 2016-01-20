<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getContact() {
		return view('pages.contact');
	}

	public function getCart() {
		return view('pages.shopping-cart');
	}

}
