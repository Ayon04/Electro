<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {         
            //  dd($this->request->all());

        return [
            'title' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:products,sku',
            'type' => 'required|string|max:255|in:Laptop,Smartphone',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock_count' => 'required|integer|min:0',
            'stock_status' => 'required|in:in_stock,out_of_stock,pre_order',
        ];
    }

 
}
