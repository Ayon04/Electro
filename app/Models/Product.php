<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products'; 

    protected $fillable = [
                  'title', 'sku', 'type', 'description', 'image', 'brand', 'price', 'stock_count', 'stock_status', 'slug'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock_count' => 'integer',
    ];


    public $timestamps = true;

}
