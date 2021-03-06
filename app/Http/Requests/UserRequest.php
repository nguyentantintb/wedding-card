<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
		'name' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages() {
      return [
      'name.required' => 'Please Enter Name',
      'email.required' => 'Please Enter email',
      'email.unique' => 'Email is exists, Pleas Enter another email',
      'password.required' => 'Pleas Enter Password',
      'password_confirmation.required' => 'Please Enter Password Confirm',
      'password_confirmation.same' => 'Confirm password not right',
  }
}
