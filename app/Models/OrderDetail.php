<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "shop_order_details";
    protected $fillable =[
        'order_id',
        'product_id',
        'product_price',
        'product_qty',
        'product_total'
    ];

    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
