<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderProducts(){
        return $this->hasMany('App\Models\OrderItem');
    }

    public function order_items(){

        return $this->hasMany(OrderItem::class,'order_id','order_number');
    }
        
    // public function products(){
    //     return $this->hasMany(OrderItem::class,'product_id');
    // }
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }
}
