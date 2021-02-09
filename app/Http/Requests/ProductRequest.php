<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $is_required = $this->_method ? 'nullable' : 'required';

        return [
            'product_title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required',
            'image_product' => $is_required.'|image|mimes:jpeg,png,jpg,svg',
            'qyt' => 'required',
            'status' => 'nullable',
            'category_id' => 'required',
        ];
    }
}
