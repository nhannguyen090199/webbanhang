<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    protected $table='shop_cart';

    protected $fillable=[
        'user_id',
        'product_id',
        'quality',
        'total_price'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function countCart(){
        if(Auth::check()){
            $count= self::where('user_id', Auth::user()->id)->count();
            return $count;
        }
        return 0;
    }



}
