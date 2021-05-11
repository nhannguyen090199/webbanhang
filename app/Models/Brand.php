<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table ='shop_brand';
    protected $fillable = [
        'title',
        'status',
    ];

    public function product(){
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }


}
