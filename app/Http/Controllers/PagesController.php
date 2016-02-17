<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Request;
use App\Category;
use App\Product;
class PagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function index() {
		$banner_dir = "ckfinder/userfiles/images/banner/";
		$banner_files = glob($banner_dir.'*.*');
		return view('pages.home', compact('banner_files'));
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function sendContact() {
		$data =
		[
		'name' => Request::input('name'),
		'email' => Request::input('email'),
		'phonenumber' => Request::input('phonenumber'),
		'messages' => Request::input('messages'),
		];

		Mail::queue('emails.blanks', $data, function ($msg) {
			$msg->from('john@example.com', 'John David');
			$msg->to('tinnguyentan.tb@gmal.com', 'Nguyen Tan Tin')->subject('Mail phản hồi của khách');
		});
		echo "<script>
		alert('Cảm ơn bạn đã góp ý. Chúng tôi sẽ liện hệ với bạn trong thời gian sớm nhất');
		window.location='" . url('/') . "'
	</script>";
}

	public function getCart() {
		return view('pages.shopping-cart');
	}

	public function ProductOfCate($slug) {
		 $cate_id = Category::where('slug', '=', $slug)->first();
        $productOfcate = Product::where('category_id', $cate_id->id)->orderBy('created_at', 'DESC')->paginate(3);

        return view('pages.category', compact('productOfcate'));
	}
}
