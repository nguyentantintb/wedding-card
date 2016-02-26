<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required | max: 20 | min: 6',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please Enter Name',
            'email.required' => 'Please Enter email',
            'email.unique' => 'Email is exists, Pleas Enter another email',
            'password.required' => 'Pleas Enter Password',
            'password.max' => 'Length password maximum 20 character',
            'password.min' => 'Length password minimum 6 character',
            'password_confirmation.required' => 'Please Enter Password Confirm',
            'password_confirmation.same' => 'Confirm password incorrect',

        ];
    }
}
