<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function order_items(){
        return $this->belongsTo(OrderItem::class, 'product_id');
    }
}
