<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}