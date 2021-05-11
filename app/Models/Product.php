<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='shop_product';
    protected $fillable = [
        'category_id',
        'brand_id',
        'image',
        'title',
        'image',
        'status',
        'price_old',
        'quality',
        'promotion',
        'introtext',
        'fulltext',
        'is_sale',
        'is_hot',
        'is_new',
        'rating'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id' );
    }
    public function cart(){
        return $this->hasMany(Cart::class,'product_id', 'id');
    }
    public function orderDetail(){
        return $this->hasMany(OrderDetail::class, 'product_id');
    }


}
