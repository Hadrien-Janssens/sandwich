<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'is_paid',
        'is_sent',
        'is_validated'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ligneOrders()
    {
        return $this->hasMany(OrderLigne::class);
    }
}
