<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            // 'name'        => 'required | max: 255 | min: 6',
            // 'price'       => 'required | integer | max: 1000000',
            // 'description' => 'max: 300',
            // 'category_id' => 'required',
            // 'file'        => 'required',
        ];
    }
}
