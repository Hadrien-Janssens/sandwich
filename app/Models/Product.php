<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name',
        'price_normal',
        'price_big',
        'category_id',
    ];

    // category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}