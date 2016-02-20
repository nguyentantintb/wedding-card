<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Request;
use App\Category;
use App\Product;
use Cart;
use App\Photo;
use App\FeaturedProduct;

class PagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function index() {
		$banner_dir = "ckfinder/userfiles/images/banner/";
		$banner_files = glob($banner_dir.'*.*');
		$featured_products = FeaturedProduct::orderBy('rank','ASC')->get();
		foreach($featured_products as $i){
			$id[] = 
				$i->product_id;
		};
		// dd($id);
		$featured_photo = Photo::whereIn('product_id', $id)->get();
		$lastest_product = Product::orderBy('created_at', 'DESC')->limit(8)->get();
		// dd($featured_p1hoto);
		return view('pages.home', compact('banner_files','lastest_product', 'featured_products','featured_photo'));
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

	

	public function ProductOfCate($slug) {
		$cate_id = Category::where('slug', '=', $slug)->first();
        $productOfcate = Product::where('category_id', $cate_id->id)->orderBy('created_at', 'DESC')->paginate(3);

        return view('pages.category', compact('productOfcate'));
	}

	public function ShoppingCart() {
		$content = Cart::content();
		return view('pages.shopping-cart',compact('content'));
	}

	public function buyProduct($slug)
	{
		$product = Product::findBySlug($slug)->first();
		Cart::add(array('id' =>$product->id ,'name' => $product->name,'qty'=>1,'price' => $product->price ));
		$content = Cart::content();
		return redirect('shopping-cart');
	}
}
