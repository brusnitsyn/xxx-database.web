<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => 'required|max:320',
            'manufacturer' => 'max:100',
            'material' => 'max:100',
            'weight' => 'numeric|between:0,9999.99',
            'article' => 'max:100',
            'cost' => 'numeric|between:0,99999999.99',
            'description' => 'required|max:1024',
            'category' => 'required',
            'colors' => 'required'
        ];
    }
}
