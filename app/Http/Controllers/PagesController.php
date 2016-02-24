<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeaturedProduct;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Product;
use Cart;
use Mail;
use Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $banner_dir        = "ckfinder/userfiles/images/banner/";
        $banner_files      = glob($banner_dir . '*.*');

        $featured_products = FeaturedProduct::orderBy('rank', 'ASC')->whereNotNull('product_id')->with('product')->get();
  
        $lastest_product = Product::orderBy('id', 'DESC')->take(8)->with('photos')->get();
        
        return view('pages.home', compact('banner_files', 'lastest_product', 'featured_products'));
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function sendContact()
    {
        $data =
            [
            'name'        => Request::input('name'),
            'email'       => Request::input('email'),
            'phonenumber' => Request::input('phonenumber'),
            'messages'    => Request::input('messages'),
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

    public function ProductOfCate($slug)
    {
        $cate_id           = Category::where('slug', '=', $slug)->first();
        $categories        = Category::all();
        $productOfcate     = Product::where('category_id', $cate_id->id)->orderBy('created_at', 'DESC')->paginate(3);
        $featured_products = FeaturedProduct::orderBy('rank', 'ASC')->get();
        foreach ($featured_products as $i) {
            $id[] =
            $i->product_id;
        };
        $featured_photo  = Photo::whereIn('product_id', $id)->get();
        $lastest_product = Product::orderBy('created_at', 'DESC')->limit(8)->get();
        return view('pages.category', compact('productOfcate', 'cate_id', 'categories', 'featured_products', 'featured_photo', 'lastest_product'));
    }

    public function ShoppingCart()
    {
        $content = Cart::content();
        $total = Cart::total();
        return view('pages.shopping-cart', compact('content','total'));
    }

    public function buyProduct($slug)
    {
        $product = Product::findBySlug($slug)->first();
        //dd($product->mainphoto);
        Cart::add(array('id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'options' => array('img' => $product->mainphoto)));
        $content = Cart::content();
        return redirect('shopping-cart');
    }

    public function removeItem($id)
    {
        Cart::remove($id);
        return redirect('shopping-cart');
    }
}
