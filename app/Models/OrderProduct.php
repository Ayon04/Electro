<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use Order;

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id'); 
    }

    protected $fillable = ['order_id', 'product_id', 'brand_name', 'type'];
}
