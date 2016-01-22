<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'name' => 'required|unique:categories,name|max: 255|min: 6',
        ];
    }

    public function messages () {
        return [
            'name.required' => '* Không được để trống',
            'name.unique' => '* Tên này đã tồn tại',
            'name.min' => '* Tên phải dài hơn 6 ký tự',
        ];
    }
}
