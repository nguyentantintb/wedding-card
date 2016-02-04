<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Validator;
use Hash;
use Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
class AuthController extends Controller {
	/*
		    |--------------------------------------------------------------------------
		    | Registration & Login Controller
		    |--------------------------------------------------------------------------
		    |
		    | This controller handles the registration of new users, as well as the
		    | authentication of existing users. By default, this controller uses
		    | a simple trait to add these behaviors. Why don't you explore it?
		    |
	*/

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data) {
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

	public function getLogin() {
		return view('auth.login');
	}

	public function postLogin(LoginRequest $request) {
		$auth = array(
			'email' => $request->email,
			'password' => $request->password,
		);
		if (Auth::attempt($auth)) {
			$user = User::find(Auth::user()->id);
			if ($user->email === 'admin@gmail.com') {
				return redirect('admin/dashboard');
			} else {
				return redirect('/');
			}
		} else {
			return redirect('auth/login');
		}
	}

	public function getRegister() {
		return view('auth.register');
	}

	public function postRegister(RegisterRequest $request) {
		$member = new User();
		$member->name = $request->name;
		$member->email = $request->email;
		$member->password = Hash::make($request->password);
		$member->remember_token = $request->_token;
		$member->save();

		return redirect('auth/login')->with(['flash_type' => 'alert-success', 'flash_message' => 'Register Sucsess!! Please Enter your account to login']);
	}

	public function getLogout() {
		Auth::logout();

		return redirect('/');
	}
}
