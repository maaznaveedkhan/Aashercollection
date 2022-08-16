<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
   
    public function products(){
        return $this->hasMany('App\Models\Product','id');
    }

    public function order(){
        return $this->belongsTo(Order::class,'order_number','order_id');
    }
    // public function products(){
    //     return $this->hasMany(Product::class, 'id', 'product_id');
    // }

}
