<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {         
        $id = $this->route('id'); 

        return [
            'title' => 'required|string|max:255',
            'sku' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products')->ignore($id), 
            ],
            'type' => 'required|string|max:255|in:Laptop,Smartphone',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock_count' => 'required|integer|min:0',
            'stock_status' => 'required',
        ];
    }
}
