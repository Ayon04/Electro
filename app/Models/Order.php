<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    
    protected $table = 'orders';
    public $timestamps = true;
    protected $fillable = ['customer_id', 'total_amount', 'total_item','total_paid','order_status'];
   
    /**
     * Mutator to hash the password before saving.
     *
     * @param string $value
     */
   
    
}
