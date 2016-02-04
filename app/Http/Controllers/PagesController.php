<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Request;

class PagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
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

}
