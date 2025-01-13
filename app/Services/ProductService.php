<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductService
{
    public function store(array $payloads)
    {
        if (empty($payloads['slug'])) {
            $payloads['slug'] = Str::slug($payloads['title']);
        }

        return Product::query()->create($payloads);
    }
}

// public function updateProduct($id, array $payloads)
// {   
    
//     $admin = User::findOrFail($id);
//     $admin->update($payloads);
//     return $admin;

// }