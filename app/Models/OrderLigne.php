<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderLigne extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'size',
        'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
